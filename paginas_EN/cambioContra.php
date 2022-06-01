<?php
include('conexion.php');

session_start();
$id = $_SESSION['id'];

$password1 = $_POST['passw_user'];
$password2 = $_POST['passw_user1'];

if($password1 == $password2){
	$salt = "invalid";
	$contraseñaful = md5($salt.$password1);
	
	$cambioContraseña = "UPDATE datos_user SET passw_user = '$contraseñaful' WHERE id_user = '$id'";

$resultado = mysqli_query($mysqli,$cambioContraseña);
if($resultado == null)
{
	echo '<script language="javascript">alert("The change could not be made please verify your password");window.location.href="recuperarContraseña.php"</script>';
}else{
	echo '<script language="javascript">alert("Successful change");window.location.href="login.php"</script>';
 
}
}

?>