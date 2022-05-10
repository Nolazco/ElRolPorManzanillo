<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El rol por Manzanillo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="src/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navegacion-principal">
            <a href="index.php">Inicio</a>
            <a href="gastronomia.php">Gastronomía</a>
            <a href="turismo.php">Turismo</a>
            <?php if($tipo_usuario == 1){?>
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?> <i class="bi bi-robot"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="controlPanel.php">Panel de administracion</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                </ul>
            <?php }else if($tipo_usuario == 2){?>
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?> <i class="bi bi-person-check"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                </ul>
            <?php }else{?>
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?> <i class="bi bi-person"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.php">Iniciar sesion</a></li>
                    <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                </ul>
            <?php }?>
        </nav>
        <section class="textos-header">
            <h1>El rol por Manzanillo</h1>
            <img src="src/logo.png" style="width: 12pc;">
            <h2> Conoce más acerca de los lugares que puedes visitar</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,14.31 C163.37,158.39 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros mb-5">
            <h2 class="titulo">Sobre Nosotros</h2><br>
            <div class="row g-0">
                <div class="col-md-4">
                    <center><img src="src/aboutus.jpg" style ="width: 18pc;"class="imagen-sobrenosotros"></center>
                </div>
                <div class="col-md-8">
                    <div class="contenido-textos mt-1">
                        <h3><span>></span>Que puedes encontrar en nuestro blog</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum rem dolorem eaque vitae ducimus soluta, vero nam distinctio itaque facilis saepe, maiores ipsa nesciunt nihil libero accusamus autem recusandae repudiandae?</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="opciones mb-3">
            <div class="contenedor">
                <h2 class="titulo">Opciones</h2><br>
                <div class="galeria-opc">
                    <a href="turismo.php" style="text-decoration: none; color: #000000;">
                        <div class="imagen-opc mt-2">
                            <img src="src/turismo.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="src/next_right_forward_icon_220677.png">
                                <p>Lugares Turísticos</p>
                            </div>
                        </div>
                    </a>

                    <a href="gastronomia.php" style="text-decoration: none; color: #000000;">
                        <div class="imagen-opc mt-2">
                            <img src="src/gastro1.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="src/next_right_forward_icon_220677.png">
                                <p>Restaurantes</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>