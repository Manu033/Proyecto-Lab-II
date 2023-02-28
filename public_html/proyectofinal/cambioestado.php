<script type="text/javascript" src="app.js"></script>
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$cod_estado = "";
$fecha_finalizacion = "";
$fecha_inicio = "";
$pagado=0;
$fecha_pago = "";
$cod_estado_err = "";
$fecha_finalizacion_err = "";
$fecha_inicio_err = "";

// Processing form data when form is submitted
if(isset($_POST["COD_SERVICIO_BRINDADO"]) && !empty($_POST["COD_SERVICIO_BRINDADO"])){
    // Get hidden input value
    $COD_SERVICIO_BRINDADO = $_POST["COD_SERVICIO_BRINDADO"];
    $cod_estado = trim($_POST["estado"]);
    $fecha_finalizacion = trim($_POST["fecha_finalizacion"]);
    $fecha_inicio = trim($_POST["fecha_inicio"]);
    $pagado = trim($_POST["pagado"]);
    $fecha_pago= trim($_POST["fecha_pago"]);
   

    // Check input errors before inserting in database
    if(empty($cod_estado_err) && empty($fecha_finalizacion_err)){
        // Prepare an update statement
        $sql = "UPDATE SERVICIOS_BRINDADOS SET COD_ESTADO=?, FECHA_FINALIZACION=?, FECHA_INICIO=?, PAGO=?, FECHA_PAGO=? WHERE COD_SERVICIO_BRINDADO=?";
         
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"issisi", $param_cod_estado, $param_fecha_finalizacion, $param_fecha_inicio, $param_pago, $param_fecha_pago, $param_cod_servicio_brindado);
            
            //Seteamos los parametros
            $param_cod_estado = $cod_estado;
            if ($fecha_finalizacion == ''){
                $param_fecha_finalizacion = NULL;
            }else{
                $param_fecha_finalizacion = $fecha_finalizacion;
            }
            $param_fecha_inicio = $fecha_inicio;
            $param_pago = $pagado;
            if ($fecha_pago == ''){
                $param_fecha_pago = NULL;
            }else{
                $param_fecha_pago = $fecha_pago;
            }
            $param_cod_servicio_brindado = $COD_SERVICIO_BRINDADO;


            
            // Intentamos ejecutar la instruccion
            if(mysqli_stmt_execute($stmt)){
                // Registro modificado exitosamente, redireccionamos
                echo "<script> modificado(1,3); </script>";
            } else{
                echo "<script> modificado(0,3); </script>";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($DB_conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["COD_SERVICIO_BRINDADO"]) && !empty(trim($_GET["COD_SERVICIO_BRINDADO"]))){
        // Get URL parameter
        $COD_SERVICIO_BRINDADO =  trim($_GET["COD_SERVICIO_BRINDADO"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM SERVICIOS_BRINDADOS WHERE COD_SERVICIO_BRINDADO = ?";
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_COD_SERVICIO_BRINDADO);
            
            // Set parameters
            $param_COD_SERVICIO_BRINDADO = $COD_SERVICIO_BRINDADO;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
              
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $cod_estado = $row["COD_ESTADO"];
                    $fecha_finalizacion = $row["FECHA_FINALIZACION"];
                    $fecha_inicio = $row["FECHA_INICIO"];
                    $pagado = $row["PAGO"];
                    $fecha_pago = $row["FECHA_PAGO"];
                } else{
                    // La URL no contiene un COD_SERVICIO_BRINDADO VALIDO
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Algo ha ido mal. Intente nuevamente aca.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($DB_conn);
    }  else{
        // La URL no contiene un COD_SERVICIO_BRINDADO
        header("location: error.php");
        exit();
    }
}

?>

<?php include "header.php"; ?>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Actualizar Estado del servicio</h2>
                    <p>Porfavor complete el siguiente formulario.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group">
                            <label> Estado 
                                <select name="estado" id="estado" class = "form-control <?php echo (!empty($estado_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $estado; ?>" >
                                    <option value="2">En proceso</option>
                                    <option value="1">Finalizado</option>                 
                                </select>
                            </label>
                        </div>  
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input type="date" name="fecha_inicio" class="form-control <?php echo (!empty($fecha_inicio_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_inicio; ?>">
                            <span class="invalid-feedback"><?php echo $fecha_inicio;?></span>
                        </div>
                        <div class="form-group">
                            <label>Fecha Finalizacion (si corresponde)</label>
                            <input type="date" id="fecha_finalizacion"name="fecha_finalizacion" class="form-control <?php echo (!empty($fecha_finalizacion_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_finalizacion; ?>">
                        </div>
                        <div class="form-group">
                            <label>Pago</label>
                            <input type="checkbox" id="pagado" name="pagado"  value="1<?php echo $_POST["pagado"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                        </div>
                        <div>
                            <Label>Fecha Pago (si corresponde)</Label>
                            <input type="date" id="fecha_pago" name="fecha_pago" class="form-control <?php echo (!empty($fecha_pago)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_pago; ?>">
                        </div>

                        <input type="hidden" name="COD_SERVICIO_BRINDADO" value="<?php echo $COD_SERVICIO_BRINDADO; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                        <a href="buscadorserv.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
<script>
    document.getElementById("fecha_pago").disabled = true;

    $('#pagado').change(function() {
        let isChecked = $('#pagado')[0].checked
        if(isChecked){
            document.getElementById("fecha_pago").disabled = false;
        } else{
            document.getElementById("fecha_pago").disabled = true;
        }
    });
</script>


