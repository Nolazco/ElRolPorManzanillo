<?php 
  session_start();

  $nombre = $_SESSION['nameR_user'];
  $tipo_usuario = $_SESSION['tipo_user'];

  include('conexion.php'); //Hacemos la consulta de nuestro codigo sql 
  $obtencion = "SELECT * FROM publicaciones WHERE categoria = 'opt1'";
  $resultado = mysqli_query($mysqli,$obtencion);
  $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Turismo</title>
</head>

<?php include('header.php'); ?>

<body style="background: url('../src/azul.jpeg'); background-size: cover;">
	<div class="mt-5">
		<center><h1>Turismo</h1></center>
	</div>

  <?php foreach($publicaciones as $publicacion): ?>
        <div class="container">
          <div class="card mb-3 bg-primary p-1 text-dark bg-opacity-10">
            <div class="row g-0">
              <div class="col-md-4 text-center">
                <img src='archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 14pc;">
              </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $publicacion['title'] ?></h5>
                <p class="card-text">Autor: <?= $publicacion['autor_blog'] ?></p>                
                <p class="card-text"><?= $publicacion['resumen_blog'] ?>...</p>
                <p class="card-text"><small><?= $publicacion['date_created'] ?></small></p>
                <a class="btn btn-outline-primary" href="#" role="button"><i class="bi bi-info-circle"></i> Ver más...</a>
              </div>
            </div>
            </div>
          </div>
        </div>
  <?php endforeach ?>
  
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script></body>
</html>