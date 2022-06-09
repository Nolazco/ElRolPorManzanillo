<nav class="navegacion-principal">
    <?php if($id_pagina == 1){?>
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/src/img/mexico.png" style="width: 2pc;"></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/index_EN.php"><img src="/src/img/eu.png" style="width: 2pc;"> English</a></li>
            <li><a class="dropdown-item" href="/index_AL.php"><img src="/src/img/alemania.png" style="width: 2pc;"> Deutsch</a></li>
            <li><a class="dropdown-item" href="/index_FR.php"><img src="/src/img/francia.png" style="width: 2pc;"> Français</a></li>
        </ul>

        <a href="/index.php">Inicio</a>
        <a href="/paginas/gastronomia.php">Gastronomía</a>
        <a href="/paginas/turismo.php">Turismo</a>

        <?php if($tipo_usuario == 1){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-robot"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/admin/controlPanel.php">Panel de administracion</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/paginas/logout.php">Cerrar sesion</a></li>
            </ul>
        <?php }else if($tipo_usuario == 2){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person-check"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas/logout.php">Cerrar sesion</a></li>
            </ul>
        <?php }else{?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas/login.php">Iniciar sesion</a></li>
                <li><a class="dropdown-item" href="/paginas/register.php">Registrate</a></li>
            </ul>
        <?php }?>

    <?php }else if($id_pagina == 2){?>
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/src/img/eu.png" style="width: 2pc;"></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/index.php"><img src="/src/img/mexico.png" style="width: 2pc;"> Español</a></li>
            <li><a class="dropdown-item" href="/index_AL.php"><img src="/src/img/alemania.png" style="width: 2pc;"> Deutsch</a></li>
            <li><a class="dropdown-item" href="/index_FR.php"><img src="/src/img/francia.png" style="width: 2pc;"> Français</a></li>
        </ul>

        <a href="/index_EN.php">Index</a>
        <a href="/paginas_EN/gastronomia.php">Gastronomy</a>
        <a href="/paginas_EN/turismo.php">Tourism</a>

        <?php if($tipo_usuario == 1){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-robot"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/admin/controlPanel.php">Panel de administracion</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/paginas_EN/logout.php">Cerrar sesion</a></li>
            </ul>
        <?php }else if($tipo_usuario == 2){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person-check"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_EN/logout.php">Log out</a></li>
            </ul>
        <?php }else{?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_EN/login.php">Log in</a></li>
                <li><a class="dropdown-item" href="/paginas_EN/register.php">Sign in</a></li>
            </ul>
        <?php }?>

    <?php }else if($id_pagina == 3){?>
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/src/img/alemania.png" style="width: 2pc;"></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/index.php"><img src="/src/img/mexico.png" style="width: 2pc;"> Español</a></li>
            <li><a class="dropdown-item" href="/index_EN.php"><img src="/src/img/eu.png" style="width: 2pc;"> English</a></li>
            <li><a class="dropdown-item" href="/index_FR.php"><img src="/src/img/francia.png" style="width: 2pc;"> Français</a></li>
        </ul>

        <a href="/index_AL.php">Anfang</a>
        <a href="/paginas_AL/gastronomia.php">Gastronomie</a>
        <a href="/paginas_AL/turismo.php">Besichtigung</a>

        <?php if($tipo_usuario == 1){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-robot"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/admin/controlPanel.php">Panel de administracion</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/paginas_AL/logout.php">Cerrar sesion</a></li>
            </ul>
        <?php }else if($tipo_usuario == 2){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person-check"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_AL/logout.php">Ausloggen</a></li>
            </ul>
        <?php }else{?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_AL/login.php">Einloggen</a></li>
                <li><a class="dropdown-item" href="/paginas_AL/register.php">Anmelden</a></li>
            </ul>
        <?php }?>

    <?php }else if($id_pagina == 4){?>
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/src/img/francia.png" style="width: 2pc;"></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/index.php"><img src="/src/img/mexico.png" style="width: 2pc;"> Español</a></li>
            <li><a class="dropdown-item" href="/index_EN.php"><img src="/src/img/eu.png" style="width: 2pc;"> English</a></li>
            <li><a class="dropdown-item" href="/index_AL.php"><img src="/src/img/alemania.png" style="width: 2pc;"> Deutsch</a></li>
        </ul>

        <a href="/index_FR.php">Indice</a>
        <a href="/paginas_FR/gastronomia.php">Gastronomie</a>
        <a href="/paginas_FR/turismo.php">Touristique</a>

        <?php if($tipo_usuario == 1){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-robot"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/admin/controlPanel.php">Panel de administracion</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/paginas_FR/logout.php">Cerrar sesion</a></li>
            </ul>
        <?php }else if($tipo_usuario == 2){?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person-check"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_FR/logout.php">Fermer la session</a></li>
            </ul>
        <?php }else{?>
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($nombre); ?> <i class="bi bi-person"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/paginas_FR/login.php">Commencer la session</a></li>
                <li><a class="dropdown-item" href="/paginas_FR/register.php">S'inscrire</a></li>
            </ul>
        <?php }?>
    <?php }?>
</nav>