<?php  
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index");
  }
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../../vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/estilos.css">
		<link rel="stylesheet" href="../../css/simple-sidebar.css">
		<link rel="shortcut icon" href="../../files/img/ITMS2.ico">
		<title>Subir curso</title>
	</head>


	<body>
    <div class="d-flex toggled" id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">

        <div class="">
            <a href="home">
              <img src="../../files/img/Logo ITMS.png" class="logo">
            </a>
        </div>

        <div class="list-group list-group-flush b_right">

          <ul class="navbar-nav list-group-item-action">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                <div class="barra"></div>
                <span>Mi Perfil</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="subir_curso">Subir curso</a>
                <a class="dropdown-item" href="mis_cursos">Mis cursos</a>
                <a class="dropdown-item" href="../models/actualizar_perfil">Actualizar perfil</a>
                <hr>
                <a class="dropdown-item" href="../models/cerrar_sesion" style="padding-top: 0.1%">Cerrar sesión</a>
              </div>
            </li>
          </ul>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Audios</span>
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Videos</span>
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Multimedia</span> 
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Documentos</span> 
          </a>

          <div class="row centro color3 b_bottom2 logohome enlaces" style="width: 106.5%; padding-top: 14%; padding-bottom: 5%; height: 200px">
              <!-- <a href="../views/home.php"><img src="../../files/img/ITMS2.png" class="logohome"></a> -->
          </div>

          <div class="t_centro color3 b_bottom" style="font-size: 11px; padding-top: 5%; padding-bottom: 5%; background: #f2f2f2;">
            ITMS Capacitación (1) 593-1770<br>
            &copy; Todos los derechos reservados <br>
            2019
          </div>

        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
      <nav class="navbar navegacion b_bottom">
          <button class="btn boton_menu" id="menu-toggle">
            <i class="fas fa-bars"></i>
          </button>

          <div class="sesion">
            <p class="">
              <?php 
                echo $_SESSION["nombres"]." ".$_SESSION["apellidos"];
              ?>
            </p>
          </div>
      </nav>

      <br>

      <div class="container div2 color3">
        <div class="row b_bottom">
          <!-- <div class="col-sm-3 color1">
            <a href="home.php">
              <img src="../../files/img/Logo ITMS.png" class="logo2">
            </a>
          </div> -->
          <div class="col-sm-12 encabezado">
            Subir curso
          </div>
        </div>

        <form action="../models/subir_curso" enctype="multipart/form-data" method="POST">
          
          <div class="row espacio">
            <div class="col-sm-4 t_centro espacio2">
              <label for="name">Nombre del archivo</label>
            </div>
            <div class="col-sm-7">
              <input type="text" name="nombre" id="name" class="form-control inputs" placeholder="nombre archivo.." required>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4 t_centro">
              <label for="file">Agregar archivo</label>
            </div>
            <div class="col-sm-8">
              <input type="file" name="archivo" required>
            </div>
          </div>

          <br>
          <div class="row espacio centro">
              <input type="submit" class="btn btn-sm btn-outline-dark" value="Subir archivo"></input>
          </div>
          <br>
          <div class="row centro">
            <a href="../views/home" class="links">Volver</a>
          </div>
          <br>
        </form>
      </div>
		

    		<script src="../../vendor/js/bootstrap.bundle.min.js"></script>
    		<script src="../../vendor/jquery/jquery.js"></script>
      	<script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>


		 <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
	</body>
</html>