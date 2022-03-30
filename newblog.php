<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8">


    </head>
 
    <body>
        <article>
            <form action="setpublicacion.php" method="post" enctype="multipart/form-data">
                <h1>Formulario para crear nuevo blog</h1>
                Titulo: <input type="text" id="titulo" name="titulo"><br>
                Ingrese la categoria: <select name="categoria">
                    <option value="op0">Seleccionar</option>
                    <option value="opt1">Lugar turistico</option>
                    <option value="opt2">Gastronomia</option>
                </select><br>
                Informacion a mostrar en el blog:<br> <textarea cols="100" rows="30" id="informacion" name ="informacion"></textarea><br>
                Ingrese una imagen: <input type="file"   name="imagen" accept="image/png, .jpeg, .jpg, image/gif" ><br>
                <input type="submit" value="Publicar" >



// cargar datos : https://disenowebakus.net/llevando-datos-de-la-base-mysql-a-las-paginas-php.php



            </form>





        </article>




    </body>


</html>