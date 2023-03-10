<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nombre = "";
$apellido = "";
$email = "";
$telefono=0;
$cod_tipo_contacto = 0;
$nombre_err = "";
$apellido_err = "";
$email_err = "";
$telefono_err ="";
$cod_tipo_contacto_err = 0;
 
// Processing form data when form is submitted
if(isset($_POST["COD_PERSONA"]) && !empty($_POST["COD_PERSONA"])){
    // Get hidden input value
    $COD_PERSONA = $_POST["COD_PERSONA"];
    
    // Validate nombre
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Porfavor ingresa un nombre:";
    } elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_err = "Porfavor ingresa un nombre valido.";
    } else{
        $nombre = $input_nombre;
    }
    
    // Validate apellido
    $input_apellido = trim($_POST["apellido"]);
    if(empty($input_apellido)){
        $apellido_err = "Porfavor ingresa un apellido.";     
    } else{
        $apellido = $input_apellido;
    }
    
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Porfavor ingrese un email.";     
    } else{
        $email = $input_email;
    }

    // Validate telefono
    $input_telefono = trim($_POST["telefono"]);
    if(empty($input_telefono)){
        $telefono_err = "Porfavor ingrese un numero de telefono.";     
    } elseif(!ctype_digit($input_telefono)){
        $telefono_err = "Ingrese un numero de telefono valido.";
    } else{
        $telefono = $input_telefono;
    }
    
    // Validate COD TIPO CONTACTO
    $input_cod_tipo_contacto = trim($_POST["cod_tipo_contacto"]);
    if(empty($input_cod_tipo_contacto)){
        $cod_tipo_contacto_err = "Porfavor ingrese un tipo de contacto.";     
    } elseif(!ctype_digit($input_cod_tipo_contacto)){
        $input_cod_tipo_contacto = "Ingrese un numero de contacto valido.";
    } else{
        $cod_tipo_contacto = $input_cod_tipo_contacto;
    }

    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($apellido_err) && empty($email_err) && empty($telefono_err)){
        // Prepare an update statement
        $sql = "UPDATE PERSONAS SET NOMBRE=?, APELLIDO=?, EMAIL=?, TELEFONO=?, COD_TIPO_CONTACTO=? WHERE COD_PERSONA=?";
         
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssiii", $param_nombre, $param_apellido, $param_email, $param_telefono, $param_cod_tipo_contacto, $param_COD_PERSONA);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_apellido = $apellido;
            $param_email = $email;
            $param_telefono = $telefono;
            $param_cod_tipo_contacto = $cod_tipo_contacto;
            $param_COD_PERSONA = $COD_PERSONA;

            

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Algo ha ido mal. Intente nuevamente 2.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($DB_conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["COD_PERSONA"]) && !empty(trim($_GET["COD_PERSONA"]))){
        // Get URL parameter
        $COD_PERSONA =  trim($_GET["COD_PERSONA"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM PERSONAS WHERE COD_PERSONA = ?";
        if($stmt = mysqli_prepare($DB_conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_COD_PERSONA);
            
            // Set parameters
            $param_COD_PERSONA = $COD_PERSONA;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
              
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $nombre = $row["NOMBRE"];
                    $apellido = $row["APELLIDO"];
                    $email = $row["EMAIL"];
                    $telefono = $row["TELEFONO"];
                    $cod_tipo_contacto = $row["COD_TIPO_CONTACTO"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
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
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Modificar Registro</h2>
                    <p>Porfavor completa los campos y presiona aceptar para modificar un registro.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control <?php echo (!empty($nombre_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nombre; ?>">
                            <span class="invalid-feedback"><?php echo $nombre_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control <?php echo (!empty($apellido_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $apellido; ?>">
                            <span class="invalid-feedback"><?php echo $apellido_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>

                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="number" name="telefono" class="form-control <?php echo (!empty($telefono_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $telefono; ?>">
                            <span class="invalid-feedback"><?php echo $telefono_err;?></span>
                        </div>

                        <div>
                            <label for="tipo_relacion">Selecciona un tipo de relacion</label>
                            <input type="number" name="cod_tipo_contacto" class="form-control <?php echo (!empty($cod_tipo_contacto_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cod_tipo_contacto; ?>">
                            <!-- <select name="cars" id="cars">
                                <option value="personal">Personal</option>
                                <option value="laboral">Laboral</option>
                                <option value="estudio">Estudio</option>
                                <option value="familia">Familia</option>
                            </select> -->
                        </div>

                        <input type="hidden" name="COD_PERSONA" value="<?php echo $COD_PERSONA; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
