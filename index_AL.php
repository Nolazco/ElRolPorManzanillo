<?php 
    session_start();

    $nombre = $_SESSION['nameR_user'];
    $tipo_usuario = $_SESSION['tipo_user'];

    $id_pagina = 3;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Rol Por Manzanillo</title>
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/src/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('plantillas/header.php'); ?>
        <section class="textos-header">
            <h1>El Rol Por Manzanillo</h1><br>
            <img src="../src/img/logo.png" style="width: 12pc;"><br>
            <h2>Erfahren Sie mehr über die Orte, die Sie besuchen können</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-4.79,14.31 C163.37,158.39 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #f7f2eb;"></path></svg></div>
    </header>

    <main>

        <section class="contenedor sobre-nosotros mb-4">
            <h2 class="titulo">Über uns</h2><br>
            <div class="contenedor sobre-nosotros">
                <div class="card mb-3 p-1 text-dark" style="background: #f7f2eb; border-color: #f7f2eb;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                            <img src='/src/img/sandcastle.png' class="img-fluid rounded-start" style="width: 14pc;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-center contenido-textos" style="color: #83C976; font-weight: bold;"><span class="circulo"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevrons-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="7 7 12 12 7 17"></polyline>
                                    <polyline points="13 7 18 12 13 17"></polyline>
                                    </svg></span> Was finden Sie in unserem Blog</h3>
                                <p class="card-text tam-texto" style="text-align: justify;">In diesem Blog finden Sie Meinungen über die besten Restaurants in Manzanillo sowie touristische Orte, an denen Sie mit Freunden und Familie Spaß haben können.</p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </section>
        <section class="manzanilloo mb-4">
            <center>
            <br><h2 class="titulo"> Manzanillo </h2>
            <p class="tam-texto-man contenido-textos">Manzanillo ist ein aktiver Hafen und ein Touristenziel an der Küste des Pazifischen Ozeans mit zwei Buchten. Manzanillo und Santiago.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120661.79525223054!2d-104.40546681459023!3d19.077753666163314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d43417bb3e19%3A0xddb3e9aae7750d4b!2sManzanillo%2C%20Col.!5e0!3m2!1ses-419!2smx!4v1652303684216!5m2!1ses-419!2smx" 
            width="90%" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        </center>
        </section>
        <section class="opciones">
            <div class="contenedor">
                <h2 class="titulo">Kategorien</h2><br>
                <div class="galeria-opc">
                    <a href="/paginas_AL/turismo.php" style="text-decoration: none; color: #000000;">
                    <div class="imagen-opc">
                        <img src="/src/img/aboutus.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/src/img/next_right_forward_icon_220677.png" alt=""><br>
                            <p>Sehenswürdigkeiten</p>
                            <link href="turismo.html">
                        </div>
                    </div>
                    </a>
                    <a href="/paginas_AL/gastronomia.php" style="text-decoration: none; color: #000000;">
                    <div class="imagen-opc">
                        <img src="/src/img/gastro1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="/src/img/next_right_forward_icon_220677.png" alt=""><br>
                            <p>Restaurants</p>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </section>
    </main>
    <?php include('plantillas/footer.php'); ?>
    <script src="src/js/bootstrap.bundle.min.js"></script>
    <script src="src/js/sb-admin-2.min.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</body>
</html>