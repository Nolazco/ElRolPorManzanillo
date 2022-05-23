<?php 
    session_start();

    include('../paginas/conexion.php'); //Hacemos la consulta de nuestro codigo sql 
    
    if(!empty($_POST)){
    	$idPub = $_POST['idPub'];

    	$borrar = mysqli_query($mysqli, "DELETE FROM publicaciones_al WHERE id_publicacion = '$idPub'");

    	if($borrar){
    		header("Location: controlPublicaciones_AL.php");
    	}else{
    		echo "Error";
    	}
    }
    if(($_SESSION['tipo_user']) != 1){
        session_destroy();
        header("Location: ../paginas/login.php");
    }
    $nombre = $_SESSION['nameR_user'];
    $id = $_REQUEST['id'];

    $obtencion = "SELECT * FROM publicaciones_AL WHERE id_publicacion = '$id'";
    $resultado = mysqli_query($mysqli,$obtencion);
    $publicaciones = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">

    <title>Eliminar publicaciones</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/src/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img style="width: 3pc;" src="/src/img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">Panel de adminisracion</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="controlPanel.php">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Herramientas    
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw bi bi-pencil-square"></i>
                    <span>Publicaciones</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Publicaciones por idioma:</h6>
                        <a class="collapse-item" href="controlPublicaciones.php">Español</a>
                        <a class="collapse-item" href="controlPublicaciones_EN.php">Inglés</a>
                        <a class="collapse-item" href="controlPublicaciones_AL.php">Aleman</a>
                        <a class="collapse-item" href="controlPublicaciones_FR.php">Frances</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="controlUsuarios.php">
                    <i class="fas fa-fw bi bi-people"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="bi bi-list"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"><?php echo $nombre; ?></span>
                                <i class="bi bi-robot"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/index.php">
                                    <i class="bi bi-list-ul text-gray-400"></i>
                                    Volver a la pagina principal
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="bi bi-box-arrow-right text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Panel de administracion - El rol por Manzanillo</h1>
                    </div>
                    <div>
                        <p>Panel de administracion de EL rol por Manzanillo.</p><br>
                        <p>Administracion de publicaciones en alemán.</p><br>
                        <p>Borrar publicacion.</p><br> 
						<center>
	                        <?php foreach($publicaciones as $publicacion): ?>
	                        	<h5>ID de la publicacion: <?= $publicacion['id_publicacion'] ?></h5>
	                        	<h5>Nombre de la publicacion: <?= $publicacion['title'] ?></h5>
	                        	<h5>Autor de la publicacion: <?= $publicacion['autor_blog'] ?></h5>
	                        	<h5>Imagen de la publicacion:</h5>
	                        	<img src='/archivos/<?= $publicacion['img_blog'] ?>' class="img-fluid rounded-start" style="width: 5pc;">
	                        	<h5>Categoria de la publicacion: <?php if (($publicacion['categoria']) == 'Opt1'){echo "Turismo";}else{echo "Gastronomia";} ?></h5>
	                        	<h5>Fecha de creacion: <?= $publicacion['date_created'] ?></h5>
	                        <?php endforeach ?>
							
                            <form method="post" action="">
                            	<a href="controlPublicaciones_AL.php" class="btn btn-secondary btn-icon-split">
	                                <span class="icon text-white-50">
	                                    <i class="bi bi-arrow-return-left"></i>
	                                </span>
	                                <span class="text">Cancelar</span>
                            	</a>

                            	<input type="hidden" name="idPub" value="<?php echo $publicacion['id_publicacion'];?>">
		                        <button type="submit" class="btn btn-danger btn-icon-split">
	                                <span class="icon text-white-50">
	                                    <i class="bi bi-trash"></i>
	                                </span>
	                                <span class="text">Eliminar</span>
		                        </button>
	                        </form>
						</center>                        
                    </div class="mb-3">
            <!-- End of Main Content -->
                </div>
        <!-- End of Content Wrapper -->
            </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="bi bi-chevron-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesion y volver a la pagina de inicio?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Aceptar" si estas listo para irte.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../paginas/logout.php">Aceptar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/src/vendor/jquery/jquery.min.js"></script>
    <script src="/src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/src/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/src/js/sb-admin-2.min.js"></script>
</body>

</html>