<?php
	session_start();

	require "conexion.php";

	$id = $_GET["id"];
	$nombre = $_SESSION['nameR_user'];
	$comentario = $_POST["comentario"];
	$fecha = date('Y-m-d');

	$obtencion = "SELECT * FROM publicaciones_en WHERE id_publicacion = '$id'";
	$res = mysqli_query($mysqli,$obtencion);
	$consulta = mysqli_fetch_array($res);
	$cat = $consulta['categoria'];

	if(!$mysqli->query("INSERT INTO comentarios_en (id_pub, autor_comentario, fecha_comentario, comentario) VALUES('$id', '$nombre', '$fecha', '$comentario')")){
		echo "Insecion fallida " . $mysqli->errno;
	}else{
		if($cat == 'opt1') {
			header("Location: turismoPost.php?id=$id");
		}else{
			header("Location: gastronomiaPost.php?id=$id");
		}
		die;
	}