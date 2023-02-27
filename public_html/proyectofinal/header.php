<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Final</title>

  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Ubuntu&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../../LibreriasWebDeveloper/fontawesome-free-6.1.2-web/css/all.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/2c7fa5bb6b.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="./style.css">
  

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Taller Mecanico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="./index.php"><button class="btn btn-outline-warning nav-link" type="button"><i class="fa-solid fa-house"></i> Inicio</button></a>
            </li>
            <li class="nav-item">
                <a href="./clientes.php"><button class="btn btn-sm btn-outline-warning nav-link" type="button"><i class="fa-solid fa-user"></i> Agregar cliente</button></a>
            </li>
                        <li class="nav-item">
                <a href="./serviciosvista.php"><button class="btn btn-sm btn-outline-warning nav-link" type="button"><i class="fa-solid fa-screwdriver-wrench"></i> Agregar servicio</button></a>
            </li>
            <li class="nav-item">
                <a href="./agregarbrindado.php"><button class="btn btn-sm btn-outline-warning nav-link" type="button"><i class="fa-solid fa-pen-to-square"></i> Agregar turno</button></a> 
            </li>
            <li class="nav-item dropdown">
                <a href="./servicios.php"><button class="btn btn-sm btn-outline-warning nav-link" type="button"><i class="fa-solid fa-magnifying-glass"></i> Ver Servicios</button></a> 
            </li>

      </div>
    </div>
  </nav>  

</body>
