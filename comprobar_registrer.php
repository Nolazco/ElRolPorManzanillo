<html>

<head>

<body>
<?php

$userR = $_POST['nameR_user'];
$correoR = $_POST['correoR_user'];
$telefonoR = $_POST['telefonoR_user'];
$passwordR = $_POST['passwR_user'];



//llamamos a la conexion de base datos
include('conexion.php');





//Hacemos la consulta de nuestro codigo sql 
$consutaRegistro = "SELECT nameR_user FROM datos_user WHERE nameR_user='$userR'";
//usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
$resultado = mysqli_query($mysqli,$consutaRegistro);
$cont=0;
    while($consulta = mysqli_fetch_array($resultado))
    {
        echo $consulta['nameR_user'];
        $cont++;
        echo $cont;
    }
   
        if($cont == 0)
        {
            if (!$mysqli->query("INSERT INTO `datos_user` (`id_user`,`nameR_user`,`correo_user`,`telefono_user`,`passw_user`) VALUES ('', '$userR','$correoR','$telefonoR',md5('$passwordR'))")) {
    
                echo "Inserción fallida: (" . $mysqli->errno . ") " . $mysqli->error;
             }else{
                echo "<br/>"; echo "Registro agregado correctamente"; }

        }else{
            
            echo "ingresastes un usuario existente";
        }
   
//Generamos una insercion a la tabla de registros
/*

    */
?>

</body>


</head>

</html>