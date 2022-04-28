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

    if($inicio == 1){
        //header("Location: pagina.html")
        ?>
        <meta http-equiv="refresh" content="1;url=index_1.html">
        <?php
        echo "Bienvenido:";
    }else if ($inicio == 0) 
    {
        ?>

        <?php

        echo "<script>alert('Error: Revise sus datos ingresados');window.location='login.html'</script>";
    }

    ?>

</body>
</head>
</html>