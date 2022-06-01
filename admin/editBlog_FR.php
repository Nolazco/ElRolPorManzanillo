<?php 
    session_start();

    include('../paginas/conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    
    if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }
    $nombre = $_SESSION['nameR_user'];
    $id = $_REQUEST['id'];

    $obtencion = "SELECT * FROM publicaciones_fr WHERE id_publicacion = '$id'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Editar post</title>
</head>
<body class="container" style="background: #F1EAC9">
    <div class="fs-1 container" style="text-align: left; text-decoration: none;"><a href="controlPublicaciones_FR.php"><i class="bi bi-wrench-adjustable-circle"></i></i><i class="bi bi-arrow-left"></i></a></div>
    <div style="padding: 30px;">
    <center>
        <div class="mb-3 mt-2" style="width: 90%;">
            <article>
                <?php foreach($publicaciones as $publicacion): ?>
                    <form action="setEdit_FR.php?id=<?php echo $publicacion['id_publicacion'];?>" method="post" enctype="multipart/form-data">
                        <h1>Formulario para editar un post</h1>
                        <input class="form-control" type="text" id="titulo" name="titulo" value="<?= $publicacion['title'] ?>" required><br>
                        <select class="form-select form-select-sm" required name="categoria">
                            <option value="opt0" selected disabled>Ingrese la categoria del post</option>
                            <option value="opt1">Lugar turistico</option>
                            <option value="opt2">Gastronomia</option>
                        </select>
                        <br>
                        <select class="form-select form-select-sm" name="rating">
                            <option value="0" selected disabled>Ingrese el rating del post</option>
                            <option value="1">1 estrella</option>
                            <option value="2">2 estrellas</option>
                            <option value="3">3 estrellas</option>
                            <option value="4">4 estrellas</option>
                            <option value="5">5 estrellas</option>
                        </select>
                        <br>
                        Resumen del post:<br>
                        <textarea class="form-control" required id="resumen" name ="resumen" style="height: 50px;"><?= $publicacion['resumen_blog'] ?></textarea><br>
                        Contenido del post:<br> 
                        <textarea class="form-control" required id="informacion" name ="informacion" style="height: 300px;"><?= $publicacion['inf_blog'] ?></textarea><br>
                        Ingrese una imagen: <input type="file" name="imagen" required accept="image/png, .jpeg, .jpg, image/gif"><br><br>
                        <a href="controlPublicaciones_FR.php" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="bi bi-arrow-return-left"></i>
                            </span>
                            <span class="text">Regresar</span>
                        </a>
                        <input class="btn btn-primary" type="submit" value="Editar">
                    </form>
                <?php endforeach ?>
            </article>
        </div>
    </center>
</body>
</html>