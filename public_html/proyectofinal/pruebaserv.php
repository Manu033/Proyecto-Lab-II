<?php
require_once "config.php";

$sql = "CALL PROC_GET_SERVICIOS(1)";
$sql3 = "CALL PROC_GET_SERVICIOS(3)";

$query = mysqli_query($DB_conn, $sql);
while (($row = mysqli_fetch_assoc($query)) !== false ) {
    echo $row["COD_SERVICIO_BRINDADO"], '<br/>';
}

$query = mysqli_query($DB_conn, $sql3);
while (($row = mysqli_fetch_assoc($query)) !== false ) {
    echo $row["COD_SERVICIO_BRINDADO"], '<br/>';
}






?>