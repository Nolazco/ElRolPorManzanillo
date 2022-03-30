<html>

<head>

<body>
<?php

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$inf = $_POST['informacion'];

//guardar imagen en la carpeta

$name_img = $_FILES['imagen']['name'];//guardo el nombre de la img
$guardar_img = $_FILES['imagen']['tmp_name'];





//llamamos a la conexion de base datos
include('conexion.php');




    

//Generamos una insercion
if (!$mysqli->query("INSERT INTO `publicaciones` (`id_publicacion`,`title`,`categoria`,`ìnf_blog`,`img_blog`,`date_created`) VALUES ('', '$titulo', '$categoria','$inf','$name_img','')")) {
    
    echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
}else
{ 
    if(!file_exists('archivos')){//creamos una carpeta y le damos permisos si el archivo es cargado
        mkdir('archivos',0777,true);
        if(file_exists('archivos')){//guardamos y movemos a nuestra carpeta
            if(move_uploaded_file($guardar_img,'archivos/'.$name_img)){
                echo "Archivo Guardado con Exito";
            }else{
                echo "Archivo fallido";
            }
        }
    }else{
        if(move_uploaded_file($guardar_img,'archivos/'.$name_img)){
            echo "Archivo Guardado con Exito";
        }else{
            echo "Archivo fallido";
        }
    }
    echo "<br/>"; echo "Registro agregado correctamente"; }


?>

</body>


</head>

</html>