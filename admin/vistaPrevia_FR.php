<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];
    $id = $_REQUEST['id'];

    if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }

    include('../paginas/conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    $obtencion = "SELECT * FROM publicaciones_fr WHERE id_publicacion = '$id'";
    $obtencion2 = "SELECT * FROM publicaciones_fr WHERE id_publicacion != '$id' and categoria = 'opt1'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $resultado2 = mysqli_query($mysqli,$obtencion2);    
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
    $publicaciones2 = $resultado2->fetch_all(MYSQLI_ASSOC);
    $res = mysqli_query($mysqli,$obtencion);
    $consulta = mysqli_fetch_array($res);
    $titulo = $consulta['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/src/css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap">
</head>
<body id="page-top">
    <header>
        <section class="textos-header">
            <h1>Vista previa</h1><br>
            <img src="/src/img/logo.png" style="width: 12pc;"><br>
            <h2>Conoce más acerca de los lugares que puedes visitar</h2>
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
                                <p style="display: inline; display: inline; word-break: break-all; word-spacing: normal; white-space: pre-wrap;"><img src='/archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 20pc; float: left;"><?= $publicacion['inf_blog'] ?></p>                                
                            </div>
                        <?php endforeach ?>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div style="border: 5px solid #F2D2A2;">
                        <center>
                            <h2 class="text-center">Opciones</h2><br>
                            <a href="controlPublicaciones_FR.php" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="bi bi-arrow-return-left"></i>
                                </span>
                                <span class="text">Regresar</span>
                            </a><br><br>
                            <a href="editBlog_FR.php?id=<?php echo $publicacion['id_publicacion'];?>" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="bi bi-pencil"></i>
                                </span>
                                <span class="text">Editar</span>
                            </a><br><br>
                            <a href="deletePost_FR.php?id=<?php echo $publicacion['id_publicacion'];?>" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="bi bi-trash"></i>
                                </span>
                                <span class="text">Eliminar</span>
                            </a><br><br>
                        </center>
                    </div>
                </div>
            </div>
        </main>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="bi bi-chevron-up"></i>
        </a>
    <script src="/src/js/bootstrap.bundle.min.js"></script>
    <script src="/src/js/sb-admin-2.min.js"></script>
    <script src="/src/vendor/jquery/jquery.min.js"></script>
    <script src="/src/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/src/js/sb-admin-2.min.js"></script>
</body>
</html>