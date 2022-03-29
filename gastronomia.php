<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Gastronomia</title>
</head>
<body style="background-image: url(https://pics.freeartbackgrounds.com/midle/Sea_Sunset_Background-709.jpg); background-repeat: no-repeat; background-size: 100%;">
	<nav class="navbar navbar-expand-lg navbar-light bg-success p-1 text-dark bg-opacity-75">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="">Iniciar sesion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="">Registrarse</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="gastronomia.php">Gastronomia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="">Turismo</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>
	<br>
	<?php for ($i=0;$i < 6; $i++): ?>
		<div class="container">
			<div class="card mb-3 bg-success p-1 text-dark bg-opacity-25">
			  <div class="row g-0">
			    <div class="col-md-4">
			      <img src="src/rect.png" class="img-fluid rounded-start" style="width: 300px; height: 125px;">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Restaurante</h5>
			        <p class="card-text">Aqui irá un pequeño resumen de la nota</p>
			        <p class="card-text"><small>Aqui irá la fecha de subida</small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	<?php endfor ?>
</body>
</html>