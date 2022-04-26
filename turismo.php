<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Gastronomia</title>
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

<body style="background: url(src/rojo.jpg);">
	<div class="mt-5">
		<center><h1>Turismo</h1></center>
	</div>

	<!-- Tarjetas -->
	<br>
	<?php for ($i=0;$i < 6; $i++): ?>
		<div class="container">
			<div class="card mb-3 bg-warning p-1 text-dark bg-opacity-25">
			  <div class="row g-0">
			    <div class="col-md-4">
			      <img src="src/rect.png" class="img-fluid rounded-start" style="width: 300px; height: 125px;">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Lugar turistico</h5>
			        <p class="card-text">Aqui irá un pequeño resumen de la nota</p>
			        <p class="card-text"><small>Aqui irá la fecha de subida</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	<?php endfor ?>
	<script src="bootstrap.bundle.min.js"></script>
</body>
</html>