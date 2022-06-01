<?php
include('conexion.php');

$user = $_POST['name_user'];
$correo = $_POST['email_user'];
$telefono = $_POST['telefono_user'];
$id = "";
//llamamos para comprobar usuario
$consutaRecuperar = "SELECT id_user FROM datos_user WHERE nameR_user='$user' and correo_user ='$correo ' and  telefono_user = '$telefono'";

//usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
$resultado = mysqli_query($mysqli,$consutaRecuperar);

while($consulta = mysqli_fetch_array($resultado))
{
    $id =  $consulta['id_user'];
}

if($id == null)
{
    echo '<script language="javascript">alert("Falsche Daten");window.location.href="recuperarContraseña.php"</script>';

}else{
echo "Ihre Daten sind korrekt ändern Sie Ihr Passwort";
}

session_start();
$_SESSION['id'] = $id;
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
    <title>Passwort wiederherstellen</title>
</head>

<body class="container" style="background-color: #BEE3DF;">
    <center>
        <div class="formulario mt-2 mb-2" style="background: #F1EAC9">
            <div class="fs-1" style="text-align: left; text-decoration: none;"><a href="/index.php"><i class="bi bi-house-door-fill"></i><i class="bi bi-arrow-left"></i></a></div>
            <div style="padding: 30px;">
                <img class="img-fluid d-block mx-auto mt-1" style="width: 17pc" src="/src/img/logo.png"><br>
                <form action="cambioContra.php" method="post">

                  <div class="mb-3">
                    <label class="form-label fw-bold">Passwort <i class="bi bi-key-fill"></i>:</label>
                    <input type="password" class="form-control" name="passw_user">
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-bold">Passwort bestätigen <i class="bi bi-key-fill"></i>:</label>
                    <input type="password" class="form-control" name="passw_user1">
                  </div>

                  <center>
                    <input class="boton1" type="submit" value="Veränderung">
                  </center>
                </form>
            </div>
        </div>
    </center>
</body>
</html>