<?php
	session_start();

	if(!isset($_SESSION['nameR_user'])){
		header("Location: /index_AL.php");
	}

	include('conexion.php');

	$id = $_REQUEST['id'];

	$obtencion = "SELECT * FROM comentarios_al WHERE id_comentario = '$id'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $consulta = mysqli_fetch_array($resultado);
    $idPub = $consulta['id_pub'];

    $borrar = mysqli_query($mysqli, "DELETE FROM comentarios_al WHERE id_comentario = '$id'");

    if(!$borrar){
    	echo "error";
    }else{
    	header("Location: gastronomiaPost.php?id=$idPub");
    }
?>