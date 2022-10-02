<?php 
	/* Se crea el request para que no se pueda acceder a ninguna pagina sin haber iniciado sesion */
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
	<!-- se manda llamar el head de la carpeta de MainHead -->
    <?php require_once("../MainHead/head.php");?>
    <title>HelpDesk :: Nuevo Ticket</title>
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
			<!-- Encabezado del header -->
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podrás generar nuevos tickets al HelpDesk
				</p>
				<!-- Combobox -->
				<h5 class="m-t-lg with-border">Ingresar Datos</h5>

				<div class="row">
					<form method="post" id="ticket_form">
						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Título</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingresar título del ticket">
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Categoría</label>
								<select id="cat_id" name="cat_id" class="form-control">
								</select>
							</fieldset>
						</div>	
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Documentos Adicionales</label>
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
							</fieldset>
						</div>					
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" name="tick_descrip" class="summernote" ></textarea>
								</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Generar Ticket</button>
						</div>
					</form>
				</div><!--.row-->
			</div>
		</div>
	</div>
	<!-- Fin del contenido de la Página -->
		<!-- Se mandan llamar los archivos Javascript de la pagina a la carpeta MainJs -->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="nuevoticket.js"></script>
</body>
</html>
<?php
	} else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>