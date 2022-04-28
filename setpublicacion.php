<html>
<meta http-equiv="refresh" content="1;url=newblog.php">
<head>
</head>
<body>
<?php

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$inf = $_POST['informacion'];
if($categoria == 'op1'){
    echo "Ingrese la categoria de su publicacion";
}else{

//guardar imagen en la carpeta
$name_img = $_FILES['imagen']['name'];//guardo el nombre de la img
$guardar_img = $_FILES['imagen']['tmp_name'];
//obtenemos la fecha actual
$fecha = date('Y-m-d');
$res =  $_POST['resumen'];

//llamamos a la conexion de base datos
include('conexion.php');

//Generamos una insercion
if (!$mysqli->query("INSERT INTO `publicaciones` (`title`,`categoria`,`inf_blog`,`img_blog`,`date_created`, `resumen_blog`) VALUES ('$titulo', '$categoria','$inf','$name_img','$fecha', '$res')")) {
    
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

}
?>

</body>
</html>