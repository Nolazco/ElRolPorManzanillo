<?php 
include('conexion.php');
$comentario = $_POST['comentario'];

$insertarcomentario = "INSERT INTO `comentarios`(`id_comentario`, `usuario`, `comentario`) VALUES ('','Fernandes','$comentario')";

$resultado =mysqli_query($mysqli,$insertarcomentario);








?>