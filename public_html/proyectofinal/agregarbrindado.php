<script type="text/javascript" src="app.js"></script>
<?php
//Incluir archivo config para coneccion BD
require_once "config.php";

//Definimos variables e inicializamos vacias
$cliente = $estado = $servicio = 0;
$observaciones = $patente = "";
$fecha_inicio = "";
$patente_err = $observaciones_err = "";
$cliente_err = $estado_err = $servicio_err = 0;
$fecha_err = "";
//Procesamos cuando enviamos el form

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //No validamos ya que no puede errar en un selector
    $cliente = trim($_POST["cliente"]);
    $estado = trim($_POST["estado"]);
    $servicio = trim($_POST["servicio"]);
    $observaciones = trim($_POST["observaciones"]);
    $fecha_inicio = trim($_POST["fecha_inicio"]);

      // Validamos el email
      $input_patente= trim($_POST["patente"]);
      if(empty($input_patente)){
          $patente_err = "Porfavor ingrese un email.";     
      } else{
          $patente = $input_patente;
      }


    //Verificamos si tenemos errores
    if(empty($nombre_err) && empty($apellido_err) && empty($email_err) && empty($telefono_err) && empty($documento_err)){
        //PREPARAMOS LA SENTENCIA DE INSERT
        $sql = 'INSERT INTO SERVICIOS_BRINDADOS (COD_CLIENTE, COD_SERVICIO, FECHA_INICIO, COD_ESTADO, OBSERVACIONES, PATENTE) VALUES (?,?,?,?,?,?)';
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            mysqli_stmt_bind_param($stmt,"iisiss", $param_cod_cliente, $param_cod_servicio, $param_fecha_inicio, $param_cod_estado, $param_observaciones, $param_patente);

            //Seteamos los parametros
            $param_cod_cliente = $cliente;
            $param_cod_servicio = $servicio;
            // $param_fecha_inicio = $fecha_inicio;
            if ($fecha_inicio == ''){
                $param_fecha_inicio = NULL;
            }else{
                $param_fecha_inicio = $fecha_inicio;
            }
            $param_cod_estado = $estado;
            $param_observaciones = $observaciones;
            $param_patente = $patente;

            // Intentamos ejecutar la instruccion
            if(mysqli_stmt_execute($stmt)){
                // Registro creado exitosamente, redireccionamos
                echo "<script> redireccionar(1,3); </script>";
                exit();
            } else{
                echo "<script> redireccionar(0,3); </script>";
            }
        }

        //Cerrar sentencia
        mysqli_stmt_close($stmt);
    }

    // Cerrar conexion
    mysqli_close($DB_conn);
}
?>

    <?php include "header.php"; ?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-10">
                    <h2 class="mt-5">Crear turno</h2>
                    <p>Porfavor complete el siguiente formulario.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">



                        <div class="form-group" id= "clientes1">
                            <label> Cliente <select name="cliente" class = "form-control <?php echo (!empty($cliente_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cliente; ?>" >
                            <?php
                            $sql = "SELECT * FROM CLIENTES";
                            $ejecutar = mysqli_query($DB_conn, $sql);

                            ?>
                            <?php foreach($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['COD_CLIENTE']?>"> <?php echo $opciones['NOMBRE_COMPLETO'] ?></option>
                            <?php endforeach ?>
                            </select></label>
                        </div>

                        <div class="form-group" id= "servicio">
                            <label> Servicio <select name="servicio" class = "form-control <?php echo (!empty($servicio_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $servicio; ?>" >
                            <?php
                            $sql = "SELECT * FROM SERVICIOS";
                            $ejecutar = mysqli_query($DB_conn, $sql);

                            ?>
                            <?php foreach($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['COD_SERVICIO']?>"> <?php echo $opciones['DESCRIPCION'] ?></option>
                            <?php endforeach ?>
                            </select></label>
                        </div>

                        <div class="form-group">
                            <label>Fecha de inicio</label>
                            <input type="date" name="fecha_inicio" class="form-control <?php echo (!empty($fecha_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fecha_inicio; ?>">
                            <span class="invalid-feedback"></span>
                        </div>

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
                            <label>Observaciones</label>
                            <textarea name="observaciones" maxlength="50" class="form-control <?php echo (!empty($observaciones_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $observaciones; ?>"></textarea> 
                            <span class="invalid-feedback">0</span>
                        </div>

                        <div class="form-group">
                            <label>Patente</label>
                            <input type="text" name="patente" class="form-control <?php echo (!empty($patente_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $patente; ?>">
                            <span class="invalid-feedback"></span>
                        </div>


                        <input type="submit" id="botones" class="btn btn-success" value="Aceptar">
                        <a href="index.php" id="botones" class="btn btn-danger ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>


 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>  