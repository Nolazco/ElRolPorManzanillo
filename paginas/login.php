<?php

    require "conexion.php";

    session_start();

    if($_POST){
        $usuario = $_POST['name_user'];
        $password = $_POST['passw_user'];

        $sql = "SELECT * FROM datos_user WHERE nameR_user = '$usuario'";
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;

        if($num > 0){
            $salt = "invalid";
            $row = $resultado->fetch_assoc();
            $pass_bd = $row['passw_user'];

            $passFull = md5($salt.$password);

            if($pass_bd == $passFull){
                $_SESSION['nameR_user'] = $row['nameR_user'];
                $_SESSION['tipo_user'] = $row['tipo_user'];

                header("Location: /index.php");
            }else{
                echo "La contraseña es incorrecta";
            }
        }else{
            echo "Datos incorrectos";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/src/css/generales.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Iniciar sesion</title>
</head>
<body class="container" style="background-color: #BEE3DF;">
    <center>
        <div class="formulario mt-2 mb-2" style="background: #F1EAC9">
            <div class="fs-1" style="text-align: left;"><a href="/index.php"><i class="bi bi-house-door-fill"></i><i class="bi bi-arrow-left"></i></a></div>
            <div style="padding: 30px;">
                <img class="img-fluid d-block mx-auto mt-1" style="width: 17pc" src="/src/img/logo.png"><br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                  <div class="mb-3">
                    <label class="form-label fw-bold">Usuario <i class="bi bi-person-fill"></i>:</label>
                    <input type="text" class="form-control" name="name_user">
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-bold">Contraseña <i class="bi bi-key-fill"></i>:</label>
                    <input type="password" class="form-control" name="passw_user">
                    <a href="recuperarContraseña.php"><div class="form-text">¿Olvidaste tu contraseña?</div></a>
                  </div>

                  <center><input class="boton1" type="submit" value="Iniciar"></center>

                  <div class="form-text fs-6 fw-bold">¿No tienes cuenta? <a href="register.php">Click aqui</a></div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>