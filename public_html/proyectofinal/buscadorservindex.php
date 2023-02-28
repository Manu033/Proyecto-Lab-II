<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://kit.fontawesome.com/2c7fa5bb6b.js" crossorigin="anonymous"></script>
<title>Tus Rutas Hoy</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php 

require_once "config.php";

if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
if (!isset($_POST['buscartipo_servicio'])){$_POST['buscartipo_servicio'] = '';}
if (!isset($_POST['estado'])){$_POST['estado'] = '';}
if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
if (!isset($_POST['buscapreciodesde'])){$_POST['buscapreciodesde'] = '';}
if (!isset($_POST['buscapreciohasta'])){$_POST['buscapreciohasta'] = '';}
if (!isset($_POST['buscardni'])){$_POST['buscardni'] = '';}
if (!isset($_POST["orden"])){$_POST["orden"] = '';}
?>

<div class="container mt-5">
    <div class="col-12">
    <div class="row">
    <div class="col-12 grid-margin">
    <div class="card">
    <div class="card-body">

        <h4 class="card-title" id="buscadorservicios">Buscador</h4>


<form id="form2" name="form2" method="POST" action="buscadorserv.php">
        <div class="col-12 row">

            <div class="col-10">
                    <label  class="form-label" id="buscadorservicios">Nombre cliente a buscar</label>
                    <input type="text" class="form-control" id="buscar buscadorservicios" name="buscar" value="<?php echo $_POST["buscar"] ?>" >
            </div>

            <h4 class="card-title" id="buscadorservicios">Filtro de búsqueda</h4>  
            
            <div class="col-10">

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                        Servicios
                                                        <select id="assigned-tutor-filter" id="buscatiposervicio" name="buscatiposervicio" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["buscatiposervicio"] != ''){ ?>
                                                                <option value="<?php echo $_POST["buscatiposervicio"]; ?>"><?php echo $_POST["buscatiposervicio"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <?php
                                                                $sql = "SELECT * FROM SERVICIOS";
                                                                $ejecutar = mysqli_query($DB_conn, $sql);
                                                                ?>
                                                                <?php foreach($ejecutar as $opciones): ?>
                                                                        <option value="<?php echo $opciones['DESCRIPCION']?>"> <?php echo $opciones['DESCRIPCION'] ?></option>
                                                                <?php endforeach ?>
                                                                </select></label>
                                                        </select>
                                                </th>
                                                <th>
                                                        Precio desde:
                                                        <input type="number" id="buscapreciodesde" name="buscapreciodesde" class="form-control mt-2" value="<?php echo $_POST["buscapreciodesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                                <th>
                                                        Precio hasta:
                                                        <input type="number" id="buscapreciohasta" name="buscapreciohasta" class="form-control mt-2" value="<?php echo $_POST["buscapreciohasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                         
                                                <th>
                                                        Fecha desde:
                                                        <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control mt-2" value="<?php echo $_POST["buscafechadesde"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                                <th>
                                                        Fecha hasta:
                                                        <input type="date" id="buscafechahasta" name="buscafechahasta" class="form-control mt-2" value="<?php echo $_POST["buscafechahasta"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                                <th>
                                                        Estado
                                                        <select id="subject-filter" id="estado" name="estado" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["estado"] != ''){ ?>
                                                                <option value="<?php echo $_POST["estado"]; ?>"><?php echo $_POST["estado"]; ?></option>
                                                                <?php } ?>
                                                                <option value="">Todos</option>
                                                                <?php
                                                                    $sql = "SELECT * FROM ESTADOS";
                                                                    $ejecutar = mysqli_query($DB_conn, $sql);
                                                                ?>
                                                                <?php foreach($ejecutar as $opciones): ?>
                                                                        <option value="<?php echo $opciones['DESCRIPCION']?>"> <?php echo $opciones['DESCRIPCION'] ?></option>
                                                                <?php endforeach ?>
                                                                </select></label>        
                                                        </select>
                                                </th>
                                                <th>
                                                        Solo pagos
                                                        <input type="checkbox" id="buscapagados" name="buscapagados"  value="1<?php echo $_POST["buscapagados"]; ?>" style="border: #bababa 1px solid; color:#000000;" >
                                                </th>
                                        </tr>
                                </thead>
                        </table>
                </div>
        
       
                <h4 class="card-title" id="buscadorservicios">Ordenar por:</h4>  
            
            <div class="col-10">

                        <table class="table">
                                <thead>
                                        <tr class="filters">
                                                <th>
                                                       
                                                        <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                <?php if ($_POST["orden"] != ''){ ?>
                                                                <option value="<?php echo $_POST["orden"]; ?>">
                                                                <?php 
                                                                if ($_POST["orden"] == '1'){echo 'Ordenar por cliente';} 
                                                                if ($_POST["orden"] == '2'){echo 'Ordenar por estado';} 
                                                                if ($_POST["orden"] == '3'){echo 'Ordenar por tipo de servicio';} 
                                                                if ($_POST["orden"] == '4'){echo 'Ordenar por precio de menor a mayor';} 
                                                                if ($_POST["orden"] == '5'){echo 'Ordenar por precio de mayor a menor';} 
                                                                if ($_POST["orden"] == '6'){echo 'Ordenar por fecha de reciente';} 
                                                                if ($_POST["orden"] == '7'){echo 'Ordenar por fecha de antigua';} 
                                                                ?>
                                                                </option>
                                                                <?php } ?>
                                                                <option value=""></option>
                                                                <option value="1">Ordenar por cliente</option>
                                                                <option value="2">Ordenar por estado</option>
                                                                <option value="3">Ordenar por tipo de servicio</option>
                                                                <option value="4">Ordenar por precio de menor a mayor</option>
                                                                <option value="5">Ordenar por precio de mayor a menor</option>
                                                                <option value="6">Ordenar por fecha de reciente</option>
                                                                <option value="7">Ordenar por fecha de antigua</option>
                                                        </select>
                                                </th>
                                          
                                              
                                      
                                        </tr>
                                </thead>
                        </table>
                </div>
       


                <div class="col-1">
                        <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: purple; color: white;">
                </div>
        </div>
   

<?php 
        /*FILTRO de busqueda////////////////////////////////////////////*/
        if ($_POST['buscar'] == ''){ $_POST['buscar'] = '';}
        $aKeyword = explode(" ", $_POST['buscar']);
        
        if ($_POST["buscar"] == '' AND $_POST['buscatiposervicio'] == '' AND $_POST['color'] == '' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == ''AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){ 
                $query ="SELECT SB.COD_SERVICIO_BRINDADO, CL.NOMBRE_COMPLETO, CL.NRO_DOCUMENTO, ES.DESCRIPCION AS ESTADO, SE.DESCRIPCION AS TIPO_SERVICIO, SE.PRECIO, SB.FECHA_INICIO, SB.FECHA_FINALIZACION, SB.PAGO, SB.FECHA_PAGO
                        FROM SERVICIOS_BRINDADOS SB 
                        INNER JOIN CLIENTES CL ON SB.COD_CLIENTE = CL.COD_CLIENTE
                        INNER JOIN SERVICIOS SE ON SB.COD_SERVICIO = SE.COD_SERVICIO
                        INNER JOIN ESTADOS ES ON SB.COD_ESTADO = ES.COD_ESTADO ";
                
                
        }else{
                $query ="SELECT  SB.COD_SERVICIO_BRINDADO, CL.NOMBRE_COMPLETO, CL.NRO_DOCUMENTO, ES.DESCRIPCION AS ESTADO, SE.DESCRIPCION AS TIPO_SERVICIO, SE.PRECIO, SB.FECHA_INICIO, SB.FECHA_FINALIZACION, SB.PAGO, SB.FECHA_PAGO
                        FROM SERVICIOS_BRINDADOS SB 
                        INNER JOIN CLIENTES CL ON SB.COD_CLIENTE = CL.COD_CLIENTE
                        INNER JOIN SERVICIOS SE ON SB.COD_SERVICIO = SE.COD_SERVICIO
                        INNER JOIN ESTADOS ES ON SB.COD_ESTADO = ES.COD_ESTADO ";

       
                        

        if ($_POST["buscar"] != '' ){ 
                //$query .= " WHERE CL.NOMBRE_COMPLETO LIKE '".$_POST['buscar']."'%";
                $query .= "WHERE CL.NOMBRE_COMPLETO LIKE '%" . $_POST['buscar'] . "%'";
        
        // for($i = 1; $i < count($aKeyword); $i++) {
        //    if(!empty($aKeyword[$i])) {
        //        $query .= " OR CL.NOMBRE_COMPLETO LIKE '%" . $aKeyword[$i] . "%'";
        //    }
        // }
        }
        else{
                $query .= "WHERE CL.NOMBRE_COMPLETO IS NOT NULL";
        }
        }

         if ($_POST["buscatiposervicio"] != '' ){
                $query .= " AND SE.DESCRIPCION = '".$_POST['buscatiposervicio']."' ";
         }

         if ($_POST["buscafechadesde"] != '' ){
                $query .= " AND SB.FECHA_INICIO BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
         }

         if ( $_POST['buscapreciodesde'] != '' ){
                $query .= " AND SE.PRECIO >= '".$_POST['buscapreciodesde']."' ";
         }

         if ( $_POST['buscapreciohasta'] != '' ){
                $query .= " AND SE.PRECIO <= '".$_POST['buscapreciohasta']."' ";
         }
               
         if ($_POST["estado"] != '' ){
                $query .= " AND ES.DESCRIPCION = '".$_POST["estado"]."' ";
         }

         if ( $_POST['buscardni'] != '' ){
                $query .= " AND NRO_DOCUMENTO = '".$_POST['buscardni']."' ";
         }
         
         if ( $_POST['buscapagados'] == 1 ){
                $query .= " AND SB.PAGO = '".$_POST['buscapagados']."' ";
         }

         if ($_POST["orden"] == '1' ){
                $query .= " ORDER BY CL.NOMBRE_COMPLETO ASC ";
         }

         if ($_POST["orden"] == '2' ){
                $query .= " ORDER BY ES.DESCRIPCION ASC ";
         }

         if ($_POST["orden"] == '3' ){
                $query .= " ORDER BY SE.DESCRIPCION ASC ";
         }

         if ($_POST["orden"] == '4' ){
                $query .= " ORDER BY SE.PRECIO ASC ";
         }

         if ($_POST["orden"] == '5' ){
                $query .= " ORDER BY SE.PRECIO DESC ";
         }

         if ($_POST["orden"] == '6' ){
                $query .= " ORDER BY SB.FECHA_INICIO ASC ";
         }

         if ($_POST["orden"] == '7' ){
                $query .= " ORDER BY SB.FECHA_INICIO DESC ";
         }     
         
          $sql = $DB_conn->query($query);
          $numeroSql = mysqli_num_rows($sql);

        ?>
        <p style="font-weight: bold; color:purple;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
</form>


<div class="table-responsive">
        <table class="table">
                <thead>
                        <tr style="background-color:purple; color:#FFFFFF;">
                                <th style=" text-align: center;"> Nombre Cliente </th>
                                <th style=" text-align: center;"> Documento </th>
                                <th style=" text-align: center;"> Tipo Servicio </th>
                                <th style=" text-align: center;"> Estado </th>
                                <th style=" text-align: center;"> Precio </th>
                                <th style=" text-align: center;"> Fecha Inicio </th>
                                <th style=" text-align: center;"> Fecha Finalizacion </th>   
                                <th style=" text-align: center;"> Pagado </th> 
                                <th style=" text-align: center;"> Fecha Pago </th> 
                                <th style=" text-align: center;"> Cambio de estado </th>
                        </tr>
                </thead>
                <tbody>
                <?php 
                // if($sql = $DB_conn->query($query)){
                //         $row = $sql->fetch_assoc();
                // } else {
                //        printf("Error: %s\n", $DB_conn->error);
                // }
                While($row = $sql->fetch_assoc()) {   ?>
               
                        <tr>
                        <td style="text-align: center;"><?php echo $row["NOMBRE_COMPLETO"]; ?></td>
                        <td style="text-align: center;"><?php echo $row["NRO_DOCUMENTO"]; ?></td>
                        <td style="text-align: center;"><?php echo $row["TIPO_SERVICIO"]; ?></td>
                        <td style="text-align: center;"><?php echo $row["ESTADO"]; ?></td>
                        <td style="text-align: center;"><?php echo $row["PRECIO"]; ?> $</td>
                        <td style=" text-align: center;"><?php echo $row["FECHA_INICIO"]; ?></td>
                        <td style=" text-align: center;"><?php echo $row["FECHA_FINALIZACION"]; ?></td>
                        <td style=" text-align: center;"><?php if($row["PAGO"]){echo "SI";}; ?></td>
                        
                        <td style=" text-align: center;"><?php echo $row["FECHA_PAGO"]; ?></td> 
                        <td style= "text-align:center;">
                                <?php 
                                        echo '<a href="./cambioestado.php?COD_SERVICIO_BRINDADO='. $row['COD_SERVICIO_BRINDADO'] .'" class="mr-3" title="Modificar Registro" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                ?>
                        </td>
                        </tr>
               <?php } ?>
                </tbody>
        </table>
</div>


</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>