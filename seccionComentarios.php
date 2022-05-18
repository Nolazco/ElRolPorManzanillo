<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <label for="seccioncom">Seccion de comentarios</label>
    <div class="cajadecomentarios" >
        <form action="subirCom.php" method="post">
            
            <textarea name="comentario" id="" placeholder="Añade tu comentario" required  cols="30" rows="10"></textarea>

            <button type="submit">Comentar</button>
        </form>
        <div class="comentario">
            <?php for ($i=1;$i <= 15; $i++): ?>

		<?php
                    include('conexion.php');
                    //Hacemos la consulta de nuestro codigo sql 
        $obtencion = "SELECT * FROM comentarios WHERE  id_comentario = '$i' ";
        //usamos el mysqli_query donde enviamos nuestra conexion y enviamos la consuta
        $resultado = mysqli_query($mysqli,$obtencion);
		
        while($consulta = mysqli_fetch_array($resultado))
            {
                $comentario = $consulta['comentario'];
                $usuario =$consulta['usuario'];
			
                echo $comentario;
                echo $usuario, "<br>";

            }
             endfor
                ?>
                
        </div>
    </div>
</div>

</body>
</html>

