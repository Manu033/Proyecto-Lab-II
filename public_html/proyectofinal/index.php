<?php 
    include "header.php";
    ?>

<body>
    <div class="container_info" id="divpendientes" onclick= "window.location = 'serviciospendientes.php'">
        <div class="cuadrado_pendiente cuadrado">
            <p class="titulo_turnos">Turnos pendientes: </p>
            <p class="num_turnos" id="pendientes">0</p>
        </div>

        <div class="cuadrado_proceso cuadrado" id="divproceso" onclick= "window.location = 'serviciosproceso.php'">
            <p class="titulo_turnos">Turnos en Proceso: </p>
            <p class="num_turnos" id="proceso">0</p>
        </div>

        <div class="cuadrado_finalizado cuadrado" id="divfinalizado" onclick= "window.location = 'serviciosproceso.php'">
            <p class="titulo_turnos">Turnos Finalizados: </p>
            <p class="num_turnos" id="finalizado">0</p>
        </div>
    </div>

    <?php
    //Incluir archivo config para coneccion BD
    require_once "config.php";
    //Consulta de estados y carga de valores
    $sql = "SELECT * FROM SERVICIOS_BRINDADOS WHERE COD_ESTADO = 3";
    if ($result = mysqli_query($DB_conn, $sql)){
        echo '<script type="text/javascript">'
   , '$("#pendientes").html( "'. mysqli_num_rows($result).'");'
   , '</script>';
    }   

    $sql1 = "SELECT * FROM SERVICIOS_BRINDADOS WHERE COD_ESTADO = 2";
    if ($result = mysqli_query($DB_conn, $sql1)){
        echo '<script type="text/javascript">'
   , '$("#proceso").html( "'. mysqli_num_rows($result).'");'
   , '</script>';
    }   

    $sql2 = "SELECT * FROM SERVICIOS_BRINDADOS WHERE COD_ESTADO = 1";
    if ($result = mysqli_query($DB_conn, $sql2)){
        echo '<script type="text/javascript">'
   , '$("#finalizado").html( "'. mysqli_num_rows($result).'");'
   , '</script>';
    }   

    ?>

    <?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
