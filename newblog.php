<?php 
    session_start();
    
    if(!isset($_SESSION['nameR_user'])){
        header("Location: login.php");
    }
    $nombre = $_SESSION['nameR_user'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Nuevo post</title>
</head>
<body class="container" style="background: #F1EAC9">
    <center>
        <div class="mb-3 mt-2" style="width: 90%;">
            <article>
                <form action="setpublicacion.php" method="post" enctype="multipart/form-data">
                    <h1>Formulario para crear nuevo post</h1>
                    <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo del post" require>
                    <br>
                    <select class="form-select form-select-sm" name="categoria">
                        <option selected disabled>Ingrese la categoria del post</option>
                        <option value="opt1">Lugar turistico</option>
                        <option value="opt2">Gastronomia</option>
                    </select>
                    <br>
                    Resumen del post:
                    <br> 
                    <textarea class="form-control" require id="resumen" name ="resumen" style="height: 50px;"></textarea>
                    <br>
                    Contenido del post:
                    <br> 
                    <textarea class="form-control" require id="informacion" name ="informacion" style="height: 300px;"></textarea>
                    <br>
                    Ingrese una imagen: <input type="file" name="imagen" require accept="image/png, .jpeg, .jpg, image/gif">
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Publicar">
                </form>
            </article>
        </div>
    </center>
</body>
</html>