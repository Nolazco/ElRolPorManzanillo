<!DOCTYPE html>
<html>
<head>



    <script type="text/javascript">
        function valideKey(evt){
            
            // code is the decimal ASCII representation of the pressed key.
            var code = (evt.which) ? evt.which : evt.keyCode;
            
            if(code==8) { // backspace.
              return true;
            } else if(code>=48 && code<=57) { // is a number.
              return true;
            } else{ // other keys.
                alert("Ingresar solo numeros");
              return false;
            }
        }

        function SoloLetras(e)
{
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

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 alert("Ingresar solo letras y numeros");
 return false;
}
}
        </script> 

    
</head>

<body>
    <form action="comprobar_registrer.php" method="post">
        Usuario: <input type="text" name="nameR_user" onkeypress="return SoloLetras(event);" required>
        Telefono: <input type="tel"  maxlength="10" name="telefonoR_user" onkeypress="return valideKey(event);">  
        Correo Electronico: <input type="email" name="correoR_user">
        Contraseña: <input type="password" name="passwR_user">
        <input type="submit" value="Registrarse">
    </form>




</body>



</html>