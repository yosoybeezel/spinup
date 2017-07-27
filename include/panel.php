<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="icon" type="image/png" href="../img/logo.png" />
		<link rel="stylesheet" href="../styles.css"/>

		<title>Panel de Control</title>
	</head>

	<body>
		<div class="col-sm-12 col-sm-2 navbar-default navbar-fixed-top mainLeft">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="visible-xs navbar-brand">Spin Up M&eacute;xico</a>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse">
				<ul class="list">
					<h5><strong>MESAS</strong></h5>
					<li>
						<a href="home.php#mesa" target="paginas" id="btnMesa">Crear mesa</a>
					</li>
					<li>
						Modificar
					</li>
				</ul>
				<ul class="list">
					<h5><strong>USUARIOS</strong></h5>
					<li>
						<a href="home.php#usuarios" target="paginas" id="btnUsuarios">Registrar</a>
					</li>
					<li>
						Modificar
					</li>
				</ul>
				<ul class="list">
					<h5><strong>EVENTOS</strong></h5>
					<li>
						<a href="home.php#eventos" target="paginas" id="btnEventos">Crear Evento</a>
					</li>
					<li>
						Modificar Evento
					</li>
					<li>
						<a href="invitaciones.php" target="paginas" id="btnInvitaciones">Invitaciones</a>
					</li>
				</ul>
				<ul class="list">
					<h5><strong>REPOSITORIO</strong></h5>
					<li>
						<a href="home.php#repositorio" target="paginas">Subir Archivo</a>
					</li>
					<li>
						Eliminar Archivos
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-sm-10 col-sm-offset-2 main-content mainRight">
			<!-- <iframe class="principal" name="paginas" scrolling="no" src="home.php" frameborder="0" onload='resizeIframe(this)'></iframe> -->
			<iframe class="principal" name="paginas" scrolling="no" src="home.php" frameborder="0" id="paginas"></iframe>
		</div>
		<!--Footer-->
		<footer>
			<div class="container-fluid">
				<div class="col-xm-12 col-md-6 info">
					<p>
						Spin Up 2017
					</p>
				</div>
				<div class="col-xm-12 col-md-6 social_media">
					<p>
						Siguenos en nuestras redes sociales:
					</p>
					<a href="#"><span class="icon-facebook2"></span> Facebook</a>
					<a href="#"><span class="icon-facebook2"></span> Facebook</a>
				</div>
			</div>
		</footer>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/bootstrap-datepicker.min.js"></script>
    	<script src="../js/fileinput.min.js"></script>
		<script src="../js/funciones.js"></script>
		
	</body>

</html>
