<?php

session_start();

include('../paginas/conexion.php');

if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }
$nombre = $_SESSION['nameR_user'];
$id = $_REQUEST['id'];

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$inf = $_POST['informacion'];
if($categoria != 'opt1' && $categoria != 'opt2'){
    echo "Ingrese la categoria de su publicacion";
    header("Location: editBlog.php");
}else{

//guardar imagen en la carpeta
$name_img = $_FILES['imagen']['name'];//guardo el nombre de la img
$guardar_img = $_FILES['imagen']['tmp_name'];
//obtenemos la fecha actual
$fecha = date('Y-m-d');
$res = $_POST['resumen'];
$rating = $_POST['rating'];

//Generamos una insercion
if (!$mysqli->query("UPDATE publicaciones SET title = '$titulo', categoria = '$categoria', inf_blog = '$inf', img_blog = '$name_img', date_created = '$fecha', resumen_blog = '$res', autor_blog = '$nombre', rating = '$rating' WHERE id_publicacion = '$id'")) {

        echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
        header("Location: controlPublicaciones.php");
}else
{ 
    if(!file_exists('../archivos')){//creamos una carpeta y le damos permisos si el archivo es cargado
        mkdir('../archivos',0777,true);
        if(file_exists('../archivos')){//guardamos y movemos a nuestra carpeta
            if(move_uploaded_file($guardar_img,'../archivos/'.$name_img)){
                echo "Archivo Guardado con Exito";
            }else{
                echo "Archivo fallido";
                header("Location: controlPublicaciones.php");
            }
        }
    }else{
        if(move_uploaded_file($guardar_img,'archivos/'.$name_img)){
            echo "Archivo Guardado con Exito";
        }else{
            echo "Archivo fallido";
            header("Location: controlPublicaciones.php");

        }
    }
    echo "<br/>"; echo "Registro agregado correctamente"; }
    header("Location: controlPublicaciones.php");

}
?>