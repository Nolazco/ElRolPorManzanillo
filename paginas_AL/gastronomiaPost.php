<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];
    $id = $_REQUEST['id'];

    include('conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    $obtencion = "SELECT * FROM publicaciones_al WHERE id_publicacion = '$id'";
    $obtencion2 = "SELECT * FROM publicaciones_al WHERE id_publicacion != '$id' and categoria = 'opt2'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $resultado2 = mysqli_query($mysqli,$obtencion2);    
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
    $publicaciones2 = $resultado2->fetch_all(MYSQLI_ASSOC);
    $res = mysqli_query($mysqli,$obtencion);
    $consulta = mysqli_fetch_array($res);
    $titulo = $consulta['title'];

    $id_pagina = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
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
            <h1>Gastronomie</h1><br>
            <img src="/src/img/logo.png" style="width: 12pc;"><br>
            <h2>Erfahren Sie mehr über die Orte, die Sie besuchen können</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,14.31 C163.37,158.39 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f7f2eb;"></path></svg></div>
</header>
        <main class="container">
            <div class="row g-0">
                <div class="col-md-8" style="text-align: justify;">
                    <div class="rounded-3" style="background: #EBE5DC; width: 100%; border: 5px solid #F2D2A2; padding: 15px;">
                        <?php foreach($publicaciones as $publicacion): ?>
                            <h1 class="text-center"><?= $publicacion['title'] ?></h1>
                            <h4>Autor: <?= $publicacion['autor_blog'] ?></h4>
                            <h4><?= $publicacion['date_created'] ?></h4>

                            <div>
                                <img src='/archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 20pc; float: left;">
                                <p style="word-break: break-all; word-spacing: normal; white-space: pre-wrap;"><?= $publicacion['inf_blog'] ?></p>                                
                            </div>
                        <?php endforeach ?>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div>
                        <center>
                            <h2 class="text-center">Mehr Gastronomie</h2>
                            <?php foreach($publicaciones2 as $publicacion2): ?>
                                <div class="card mt-3 p-1 text-dark bg-opacity-25" style="width: 18rem; text-align: left; background: #EBE5DC;">
                                    <img src="/archivos/<?= $publicacion2['img_blog'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $publicacion2['title'] ?></h5>
                                        <p class="card-text">Autor: <?= $publicacion2['autor_blog'] ?></p>
                                        <p class="card-text"><?= $publicacion2['resumen_blog'] ?>...</p>
                                        <p class="card-text"><small><?= $publicacion2['date_created'] ?></small></p>
                                        <center><a class="btn btn-outline-dark" href="gastronomiaPost.php?id=<?php echo $publicacion2['id_publicacion'];?>" role="button"><i class="bi bi-info-circle"></i> Mehr sehen...</a></center>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </center>
                    </div>
                </div>
            </div>
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