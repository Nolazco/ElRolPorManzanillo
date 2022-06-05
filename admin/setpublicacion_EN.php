<?php

session_start();

if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }
$nombre = $_SESSION['nameR_user'];

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$inf = $_POST['informacion'];
if($categoria != 'opt1' && $categoria != 'opt2'){
    echo "Ingrese la categoria de su publicacion";
}else{

//guardar imagen en la carpeta
$name_img = $_FILES['imagen']['name'];//guardo el nombre de la img
$guardar_img = $_FILES['imagen']['tmp_name'];
//obtenemos la fecha actual
$fecha = date('Y-m-d');
$res =  $_POST['resumen'];
$rating = $_POST['rating'];

//llamamos a la conexion de base datos
include('../paginas/conexion.php');

//Generamos una insercion
if (!$mysqli->query("INSERT INTO `publicaciones_en` (`title`,`categoria`,`inf_blog`,`img_blog`,`date_created`, `resumen_blog`,`autor_blog`,`rating`) VALUES ('$titulo', '$categoria','$inf','$name_img','$fecha', '$res', '$nombre','$rating')")) {
    
    echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
    header("Location: controlPublicaciones_EN.php");
}else
{ 
    if(!file_exists('../archivos')){//creamos una carpeta y le damos permisos si el archivo es cargado
        mkdir('../archivos',0777,true);
        if(file_exists('../archivos')){//guardamos y movemos a nuestra carpeta
            if(move_uploaded_file($guardar_img,'../archivos/'.$name_img)){
                echo "Archivo Guardado con Exito";
            }else{
                echo "Archivo fallido";
                header("Location: controlPublicaciones_EN.php");
            }
        }
    }else{
        if(move_uploaded_file($guardar_img,'../archivos/'.$name_img)){
            echo "Archivo Guardado con Exito";
        }else{
            echo "Archivo fallido";
            header("Location: controlPublicaciones_EN.php");

        }
    }
    echo "<br/>"; echo "Registro agregado correctamente"; }
    header("Location: controlPublicaciones_EN.php");

}
?>