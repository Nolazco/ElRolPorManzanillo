<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success text-dark p-1">
    <div class="container-fluid">
    	<a class="navbar-brand">Manzanillo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Incio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="gastronomia.php">Gastronomia</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="turismo.php">Turismo</a>
          </li>

          <?php if($tipo_usuario == 1){?>
	          <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <?php echo $nombre; ?> <i class="bi bi-robot"></i>
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="controlPanel.php">Panel de administracion</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
		          </ul>
	        	</li>
      		<?php }else if($tipo_usuario == 2){?>
      			<li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <?php echo $nombre; ?> <i class="bi bi-person-check"></i>
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
		          </ul>
	        	</li>
      		<?php }else{?>
      			<li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            <?php echo $nombre; ?> <i class="bi bi-person"></i>
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="login.php">Iniciar sesion</a></li>
		            <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
		          </ul>
	        	</li>
      		<?php }?>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Buscar</button>
        </form>
        
      </div>
    </div>
  </nav>
</header>