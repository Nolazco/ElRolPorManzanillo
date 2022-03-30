<html>

<head>

<body>
<?php

$userC = $_POST['name_user'];
$passwordC = md5($_POST['passw_user']);



//llamamos a la conexion de base datos
include('conexion.php');
//Hacemos la consulta de nuestro codigo sql 
$consutaInicio = "SELECT passw_user FROM datos_user WHERE  nameR_user = '$userC'";
//usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
$resultado = mysqli_query($mysqli,$consutaInicio);
$passwordBaseDatos;
    while($consulta = mysqli_fetch_array($resultado))
    {
        
        
        $passwordBaseDatos = $consulta['passw_user'];
    }
    
    if($passwordC == $passwordBaseDatos)
    {
        echo "Bienvenido a EL ROL POR MANZANILLO";
    }else{
        echo "Contraseña o Usuario Incorrecto!!";
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