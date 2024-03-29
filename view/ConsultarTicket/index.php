<?php 
	/* Se crea el request para que no se pueda acceder a ninguna pagina sin haber iniciado sesion */
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
	<!-- se manda llamar el head de la carpeta de MainHead -->
    <?php require_once("../MainHead/head.php");?>
    <title>HelpDesk :: Consultar Ticket</title>
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
			<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Consultar Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Consultar Ticket</li>
								</ol>
							</div>
						</div>
					</div>
			</header>

			<div class ="box-typical box-typical-padding">
				<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
						<th style="width: 6%;">No. Ticket</th>
							<th style="width: 15%;">Categoría</th>
							<th class="d-none d-sm-table-cell" style="width: 25%;">Título</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creación</th>
							<!-- <th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Creación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha Asignación</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Soporte</th> -->
							<th class="text-center" style="width: 15%;"></th>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!-- Fin del contenido de la Página -->
		<!-- Se mandan llamar los archivos Javascript de la pagina a la carpeta MainJs -->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="consultarticket.js"></script>
</body>
</html>
<?php
	} else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>