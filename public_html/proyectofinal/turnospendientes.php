


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../../LibreriasWebDeveloper/fontawesome-free-6.1.2-web/css/all.css"> -->
  <script src="https://kit.fontawesome.com/2c7fa5bb6b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  

</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mecanico</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="./index.html"><button class="btn btn-outline-success  nav-link" type="button"><i class="fa-solid fa-house"></i> Inicio</button></a>
          </li>
          <li class="nav-item">
           <a href="./agregarcliente.html"><button class="btn btn-sm btn-outline-secondary nav-link" type="button"><i class="fa-solid fa-user"></i> Agregar cliente</button></a>
          </li>
          <li class="nav-item">
            <a href="./agregarturno.html"><button class="btn btn-sm btn-outline-secondary nav-link" type="button"><i class="fa-solid fa-pen-to-square"></i> Agregar turno</button></a> 
        </li>
        <li class="nav-item dropdown">
            <button class="btn btn-sm btn-outline-secondary nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-pen-to-square"></i> TURNOS</button>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./turnospendientes.html">Turnos pendientes</a></li>
            <li><a class="dropdown-item" href="./turnosenproceso.html">Turnos en proceso</a></li>
            <li><a class="dropdown-item" href="./turnosfinalizados.html">Turnos finalizados</a></li>
          </ul>
      </div>
    </div>
  </nav>
  
  <!-- <table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Smith</td>
            <td>Thomas</td>
            <td>smith@example.com</td>
        </tr>
        <tr>
            <td>Merry</td>
            <td>Jim</td>
            <td>merry@example.com</td>
        </tr>

    </tbody> -->
    
<!-- </table> -->
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th><th>Apellido</th><th>Email</th><th>Telefono</th><th>Observaciones</th><th>Patente</th><th>Estado</th></tr></thead>
            <tbody><tr><td>1</td><td>MANUEL</td><td>CARRIZO</td><td>manu@carrizo.com</td><td>35121333</td><td>Cambio de aceite</td><td>ABC123</td><td>PENDIENTE</td><td><a href="./read.php?COD_PERSONA=1" class="mr-3" title="Ver detalle" data-toggle="tooltip"><span class="fa fa-eye"></span></a><a href="./update.php?COD_PERSONA=1" class="mr-3" title="Modificar Registro" data-toggle="tooltip"><span class="fa fa-pencil"></span></a><a href="./delete.php?COD_PERSONA=1" title="Eliminar Registro" data-toggle="tooltip"><span class="fa fa-trash"></span></a></td></tr></tbody></table>    




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
