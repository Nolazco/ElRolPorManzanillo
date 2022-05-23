<html>

<head>

<body>
<?php
//asignamos los valores de los inputs del documento login.html a variables.
$user = $_POST['name_user'];
$correo = $_POST['email_user'];
$telefono = $_POST['telefono_user'];
//incriptamos la contraseña con md5


//llamamos a la conexion de base datos
include('conexion.php');

//llamamos para comprobar usuario
$consutaRecuperar = "SELECT id_user FROM datos_user WHERE nameR_user='$user' and correo_user ='$correo ' and  telefono_user = '$telefono'";

//usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
$resultado = mysqli_query($mysqli,$consutaRecuperar);

    while($consulta = mysqli_fetch_array($resultado))
    {
        
        
        $id =  $consulta['id_user'];
    }
   
 

function modificar(){
    $passw1 = $_POST['passw1'];
    $passw2 = $_POST['passw2'];
    if($passw1 == $passw2)
    {
        $consutaCambiar =" UPDATE datos_user SET passw_user = '$passw1' WHERE id_user='$id'" ;
        $resultado = mysqli_query($mysqli,$consutaCambiar);
        echo "Su contraseña ha sido cambiada con exito";
    }

}
?>