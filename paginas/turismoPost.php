<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];
    $id = $_REQUEST['id'];

    include('conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    $obtencion = "SELECT * FROM publicaciones WHERE id_publicacion = '$id'";
    $obtencion2 = "SELECT * FROM publicaciones WHERE id_publicacion != '$id' and categoria = 'opt1' LIMIT 5";
    $obtencion_comen = "SELECT * FROM comentarios WHERE id_pub = '$id'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $resultado2 = mysqli_query($mysqli,$obtencion2);
    $resultado_comen = mysqli_query($mysqli,$obtencion_comen);
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
    $publicaciones2 = $resultado2->fetch_all(MYSQLI_ASSOC);
    $comentariosN = $resultado_comen->fetch_all(MYSQLI_ASSOC);
    $comentarios = array_reverse($comentariosN);
    $res = mysqli_query($mysqli,$obtencion);
    $consulta = mysqli_fetch_array($res);
    $titulo = $consulta['title'];
    $id_pub = $consulta['id_publicacion'];

    $id_pagina = 1;
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
            <h1> Turismo</h1><br>
            <img src="/src/img/logo.png" style="width: 12pc;"><br>
            <h2> Conoce más acerca de los lugares que puedes visitar</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,14.31 C163.37,158.39 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f7f2eb;"></path></svg></div>
</header>
        <main class="container">
            <div class="row g-0">
                <div class="col-md-8" style="text-align: justify;">
                    <div class="rounded-3 contenedorPost">
                        <?php foreach($publicaciones as $publicacion): ?>
                            <h1 class="text-center"><?= $publicacion['title'] ?></h1>
                            <h4>Autor: <?= $publicacion['autor_blog'] ?></h4>
                            <h4><?= $publicacion['date_created'] ?></h4>
                            <div style="clear: both;overflow: hidden;">
                                <p style="display: inline; display: inline; word-break: break-all; word-spacing: normal; white-space: pre-wrap;"><img src='/archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 20pc; float: left;"><?= $publicacion['inf_blog'] ?></p>
                                <h3>
                                    Rating: <img style="width: 8pc;" src="../src/img/estrellas_<?=$publicacion['rating']?>.png">
                                </h3>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="mt-3 rounded-3 contenedorComentarios">
                        <h3 class="text-center">Comentarios</h3>
                        <?php foreach($comentarios as $comentario): ?>
                            <div class="mt-3" style="border: 1px solid black; padding: 4px;">
                                <h5>
                                    <i class="bi bi-person-circle"></i> <?= $comentario['autor_comentario'] ?>
                                    <?php if(($_SESSION['nameR_user'] == $comentario['autor_comentario']) or ($_SESSION['tipo_user'] == 1)){ ?>
                                        <a href="eliminarComentario.php?id=<?php echo $comentario['id_comentario'];?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <?php }?>
                                </h5>
                                <p><?= $comentario['fecha_comentario'] ?></p>
                                <p><?= $comentario['comentario'] ?></p>
                            </div>
                        <?php endforeach ?>
                        <?php if(isset($_SESSION['nameR_user'])): ?>
                            <form class="mt-3" action="procesarComentario.php?id=<?php echo $id_pub; ?>" method="POST">
                                <textarea class="form-control" style="height: 100px;" name="comentario" placeholder="Comentario..."></textarea>
                                <input class="btn btn-secondary mt-2" type="submit" value="Comentar">
                            </form>
                        <?php else: ?>
                            <a href="login.php" style="cursor: pointer;"><textarea class="form-control mt-3" disabled style="height: 100px; cursor: pointer;" name="comentario" placeholder="Inicia sesión para comentar"></textarea></a>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <center>
                            <h2 class="text-center">Mas de Turismo</h2>
                            <?php foreach($publicaciones2 as $publicacion2): ?>
                                <div class="card mt-3 p-1 text-dark bg-opacity-25" style="width: 18rem; text-align: left; background: #EBE5DC;">
                                    <img src="/archivos/<?= $publicacion2['img_blog'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $publicacion2['title'] ?></h5>
                                        <p class="card-text">Autor: <?= $publicacion2['autor_blog'] ?></p>
                                        <p class="card-text"><?= $publicacion2['resumen_blog'] ?>...</p>
                                        <p class="card-text"><small><?= $publicacion2['date_created'] ?></small></p>
                                        <center><a class="btn btn-outline-dark" href="turismoPost.php?id=<?php echo $publicacion2['id_publicacion'];?>" role="button"><i class="bi bi-info-circle"></i> Ver más...</a></center>
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