<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];

    include('conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    $obtencion = "SELECT * FROM publicaciones_al WHERE categoria = 'opt1'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $publicacionesN = $resultado->fetch_all(MYSQLI_ASSOC);
    $publicaciones = array_reverse($publicacionesN);
    
    $id_pagina = 3;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourismus</title>
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/src/css/estilos.css">
    <link rel="stylesheet" href="/src/vendor/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap">
    </head>

    <body id="page-top">
        <header class="turismo">
            <?php include('../plantillas/header.php'); ?>
            <section class="textos-header">
                <h1>Tourismus</h1><br>
                <img src="/src/img/logo.png" style="width: 12pc;"><br>
                <h2>Erfahren Sie mehr über die Orte, die Sie besuchen können</h2>
            </section>
            <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,14.31 C163.37,158.39 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f7f2eb;"></path></svg></div>
        </header>

        <main>
            <?php foreach($publicaciones as $publicacion): ?>
                <div class="container-sm" style="width: 70%;">
                    <div class="card mb-3 p-1 text-dark bg-opacity-25 border-light" style="background: #EBE5DC;">
                        <div class="row g-0">
                            <div class="col-md-6 text-center">
                                <img src='/archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 14pc;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="color: #83C976; font-weight: bold;"><?= $publicacion['title'] ?></h5>
                                    <center>
                                        <p class="card-text">
                                          <?= $publicacion['date_created'] ?>
                                          <br>
                                          <img style="width: 8pc;" src="../src/img/estrellas_<?=$publicacion['rating']?>.png">
                                        </p>
                                        <p class="card-text"><?= $publicacion['resumen_blog'] ?></p>
                                        <p class="card-text">Autor: <?= $publicacion['autor_blog'] ?></p>
                                        <a class="btn btn-outline-dark" href="turismoPost.php?id=<?php echo $publicacion['id_publicacion'];?>" role="button"><i class="bi bi-info-circle"></i> Mehr sehen...</a></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </main>

        <script src="/src/js/bootstrap.bundle.min.js"></script>
        <script src="/src/js/sb-admin-2.min.js"></script>
        <script src="/src/vendor/jquery/jquery.min.js"></script>
        <script src="/src/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="/src/js/sb-admin-2.min.js"></script>
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
        <?php include('../plantillas/footer.php'); ?>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="bi bi-chevron-up"></i>
        </a>
    </body>
</html>