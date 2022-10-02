<?php 
	/* Se crea el request para que no se pueda acceder a ninguna pagina sin haber iniciado sesion */
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
	<!-- se manda llamar el head de la carpeta de MainHead -->
    <?php require_once("../MainHead/head.php");?>
    <title>HelpDesk :: Secrets & Dreams Bahia Mita</title>
</head>
<body class="with-side-menu">

		<!-- Se manda llamar el header de la carpeta de MainHeader -->
    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>

	<!-- sE manda llamar el navbar de la carpeta de MainNav -->
	<?php require_once("../MainNav/nav.php");?>

	<!-- Contenido de la Página -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>
	<!-- Fin del contenido de la Página -->
		<!-- Se mandan llamar los archivos Javascript de la pagina a la carpeta MainJs -->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="home.js"></script>
</body>
</html>
<?php
	} else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>