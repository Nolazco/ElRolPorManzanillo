<?php 
    session_start();
    
    if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="src/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/src/css/generales.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script type="text/javascript">
        function valideKey(evt){
            
        // code is the decimal ASCII representation of the pressed key.
        var code = (evt.which) ? evt.which : evt.keyCode;
            
        if(code==8){ // backspace.
            return true;
        }else if(code>=48 && code<=57){ // is a number.
            return true;
        }else{ // other keys.
            alert("Ingresar solo numeros");
            return false;
            }
        }

        function SoloLetras(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toString();
            letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú";
            especiales = [8,13,48,49,50,51,52,53,54,55,56,57];
            tecla_especial = false
            for(var i in especiales) {
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

        if(letras.indexOf(tecla) == -1 && !tecla_especial){
            alert("Ingresar solo letras y numeros");
            return false;
        }
    }
    </script>

    <title>Registrarse</title>
</head>

<body class="container" style="background-color: #BEE3DF;">
    <center>
        <div class="formulario mt-2 mb-2" style="background: #F1EAC9">
            <div class="fs-1" style="text-align: left; text-decoration: none;"><a href="controlUsuarios.php"><i class="bi bi-wrench-adjustable-circle"></i></i><i class="bi bi-arrow-left"></i></a></div>
            <div style="padding: 30px;">
                <img class="img-fluid d-block mx-auto mt-1" style="width: 17pc" src="/src/img/logo.png"><br>
                <form action="comprobar_admin.php" method="post">

                  <div class="mb-3">
                    <label class="form-label fw-bold">Usuario <i class="bi bi-person-fill"></i>:</label>
                    <input type="text" class="form-control" name="nameR_user" onkeypress="return SoloLetras(event);" required>
                  </div>

                  <div class="mb-3">
                      <label class="form-label fw-bold">Telefono <i class="bi bi-phone-fill"></i>:</label>
                      <input type="tel" class="form-control" maxlength="10" name="telefonoR_user" onkeypress="return valideKey(event);">
                  </div>

                  <div class="mb-3">
                      <label class="form-label fw-bold">Correo electronico <i class="bi bi-envelope-fill"></i>:</label>
                      <input type="email" class="form-control" name="correoR_user">
                  </div>

                  <div class="mb-3">
                    <label class="form-label fw-bold">Contraseña <i class="bi bi-key-fill"></i>:</label>
                    <input type="password" class="form-control" name="passwR_user">
                    <a href="recuperarContraseña.php"><div class="form-text">¿Olvidaste tu contraseña?</div></a>
                  </div>

                  <center>
                    <input class="boton1" type="submit" value="Registrarse">
                  </center>
                  <div class="form-text fs-6 fw-bold">¿Ya tienes cuenta? <a href="login.html">Click aqui</a></div>
                </form>
            </div>
        </div>
    </center>
</body>
</html>