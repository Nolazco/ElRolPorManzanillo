<html>

<head>

<body>
<?php
$salt = "invalid";
$userC = $_POST['name_user'];
$passwordC = $_POST['passw_user'];
$contraseñaful = md5($salt.$passwordC);


//llamamos a la conexion de base datos
include('conexion.php');
//Hacemos la consulta de nuestro codigo sql 
$consutaInicio = "SELECT * FROM datos_user WHERE  nameR_user = '$userC' AND passw_user = '$contraseñaful'";
//usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
$resultado = mysqli_query($mysqli,$consutaInicio);
$inicio = mysqli_num_rows($resultado);

if($inicio == 1)
{
	//header("Location: pagina.html")
    ?>
    <meta http-equiv="refresh" content="1;url=index_1.html">
    <?php
	echo "Bienvenido:";
}
else if ($inicio == 0) 
{
    ?>
    
    <?php
	echo "<script> alert('Error: Revise sus datos ingresados');window.location= 'login.html' </script>";
}

    






























/*


$contraseña = "SELECT passw_user FROM datos_user WHERE nameR_user='$userC'";

$result = $mysqli->query($contraseña);

//llamamos para comprobar usuario

print("SELECT * FROM datos_user WHERE nameR_user='$userC' and passw_user ='$hash'");
$resultado = $mysqli->query("SELECT * FROM datos_user WHERE nameR_user='$userC' and passw_user ='$hash'");
$registros=mysqli_num_rows($result);

if($registros==1){
    echo "Inicio de seccion CORRECTA!!!!";

}else{
    echo "Inicio de seccion FALLIDA!!!!";
    echo "Error mysql: (" . $mysqli->errno . ") " . $mysqli->error;
}


  

*/



//Generamos una insercion



/*
if (!$mysqli->query("INSERT INTO `date_user` (`id_user`,`name_user`,`pasword_user`) VALUES ('', '$user', '$password')")) {
    
    echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
}else
{ echo "<br/>"; echo "Registro agregado correctamente"; }
*/
?>

</body>


</head>

</html>