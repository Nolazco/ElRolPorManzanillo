<?php

    $userR = $_POST['nameR_user'];
    $correoR = $_POST['correoR_user'];
    $telefonoR = $_POST['telefonoR_user'];
    $passwordR = $_POST['passwR_user'];
    $salt = "invalid";
    $contraseñaful = md5($salt.$passwordR);
    
    //llamamos a la conexion de base datos
    include('conexion.php');

    //Hacemos la consulta de nuestro codigo sql 
    $consutaRegistro = "SELECT nameR_user FROM datos_user WHERE nameR_user='$userR'";
    
    //usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
    $resultado = mysqli_query($mysqli,$consutaRegistro);
    $cont=0;
    
    while($consulta = mysqli_fetch_array($resultado)){
        echo $consulta['nameR_user'];
        $cont++;
        echo $cont;
    }

    if($cont == 0){
        if (!$mysqli->query("INSERT INTO `datos_user` (`nameR_user`,`correo_user`,`telefono_user`,`passw_user`, `tipo_user`) VALUES ('$userR','$correoR','$telefonoR','$contraseñaful', '2')")){
            echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
        }else{
            echo '<script language="javascript">alert("User added successfully");window.location.href="login.php"</script>';
       }
    }else{
        echo '<script language="javascript">alert("You entered an existing user");window.location.href="register.php"</script>';
    }
?>