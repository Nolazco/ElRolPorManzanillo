<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Turismo</title>
</head>

<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success text-dark p-1">
    <div class="container-fluid">
    	<a class="navbar-brand">Manzanillo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Incio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.html">Iniciar sesion</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Resgistrarse</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="gastronomia.php">Gastronomia</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="turismo.php">Turismo</a>
          </li>        
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<body style="background: url(../src/azul.jpeg); background-size: cover;">
	<div class="mt-5">
		<center><h1>Turismo</h1></center>
	</div>

  <?php
    include('conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    $obtencion = "SELECT * FROM publicaciones WHERE categoria = 'opt1'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
  ?>

  
  <?php foreach($publicaciones as $publicacion): ?>
        <div class="container">
          <div class="card mb-3 bg-primary p-1 text-dark bg-opacity-10">
            <div class="row g-0">
              <div class="col-md-4">
                <img src='archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 14pc; margin-left: 80px;">
              </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $publicacion['title'] ?></h5>
                <p class="card-text"><?= $publicacion['inf_blog'] ?>...</p>
                <p class="card-text"><small><?= $publicacion['date_created'] ?></small></p>
                <a class="btn btn-outline-primary" href="#" role="button"><i class="bi bi-info-circle"></i> Ver más...</a>
              </div>
            </div>
            </div>
          </div>
        </div>
  <?php endforeach ?>
	<script src="bootstrap.bundle.min.js"></script>
</body>
</html>