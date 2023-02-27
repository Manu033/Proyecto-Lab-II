<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$cod_estado = "";
$fecha_finalizacion = "";
$fecha_inicio = "":
$cod_estado_err = "";
$fecha_finalizacion_err = "";
$fecha_inicio_err = "";

// Processing form data when form is submitted
if(isset($_POST["COD_SERVICIO_BRINDADO"]) && !empty($_POST["COD_SERVICIO_BRINDADO"])){
    // Get hidden input value
    $COD_SERVICIO_BRINDADO = $_POST["COD_SERVICIO_BRINDADO"];
    $cod_estado = trim($_POST["COD_ESTADO"]);
    $fecha_finalizacion = trim($_POST["FECHA_FINALIZACION"]);
    $fecha_inicio = trim($_POST["FECHA_INICIO"]);
   

    // Check input errors before inserting in database
    if(empty($cod_estado_err) && empty($fecha_finalizacion_err)){
        // Prepare an update statement
        $sql = "UPDATE SERVICIOS_BRINDADOS SET COD_ESTADO=?, FECHA_FINALIZACION=?, FECHA_INICIO=? WHERE COD_SERVICIO_BRINDADO=?";
         
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"issi", $param_cod_estado, $param_fecha_finalizacion, $param_fecha_inicio, $param_cod_servicio_brindado);
            
            //Seteamos los parametros
            $param_cod_estado = $descripcion;
            $param_fecha_finalizacion = $precio;
            $param_fecha_inicio = $COD_SERVICIO;
            $param_cod_servicio_brindado = $COD_SERVICIO_BRINDADO

            

            
            // Intentamos ejecutar la instruccion
            if(mysqli_stmt_execute($stmt)){
                // Registro creado exitosamente, redireccionamos
                
                header("location: buscadorservicios.php");
                
                exit();
            } else{
                
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
            mysqli_stmt_bind_param($stmt, "i", $param_COD_SERVICIO);
            
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
                } else{
                    // La URL no contiene un COD_SERVICIO VALIDO
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
        // La URL no contiene un COD_CLIENTE
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
                    <div class="form-group" id= "estado">
                            <label> Estado <select name="estado" class = "form-control <?php echo (!empty($estado_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $estado; ?>" >
                            <?php
                            $sql = "SELECT * FROM ESTADOS";
                            $ejecutar = mysqli_query($DB_conn, $sql);
                            ?>
                            <?php foreach($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['COD_ESTADO']?>"> <?php echo $opciones['DESCRIPCION'] ?></option>
                            <?php endforeach ?>
                            </select></label>
                        </div>  
                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input type="date" name="fecha_inicio" class="form-control <?php echo (!empty($fecha_inicio_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_inicio; ?>">
                            <span class="invalid-feedback"><?php echo $fecha_inicio;?></span>
                        </div>
                        <div class="form-group">
                            <label>Fecha Finalizacion (si corresponde)</label>
                            <input type="date" name="fecha_finalizacion" class="form-control <?php echo (!empty($fecha_finalizacion_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_finalizacion; ?>">
                            <span class="invalid-feedback"><?php echo $fecha_finalizacion;?></span>
                        </div>

                        <input type="hidden" name="COD_SERVICIO" value="<?php echo $COD_SERVICIO; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                        <a href="buscadorservicios.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>


