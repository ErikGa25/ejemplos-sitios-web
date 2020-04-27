<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="container-fluid">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						<a class="navbar-brand" href="index.php">Tutoriales TI</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<form class="navbar-form navbar-left">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar en este sitio">
							</div>
							<button type="submit" class="btn btn-default">Buscar</button>
						</form>

						<ul class="nav navbar-nav navbar-right">
							<li ><a href="index.php">Inicio<span class="sr-only">Inicio</span></a></li>
							<li><a href="acercade.php">Acerca de mi</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Base de datos</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Programación</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Desarrollo Web</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Sistemas Operativos</a></li>
								</ul>
							</li>
							<li><a href="portafolio.php">Portafolio</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="container">
				<img src="img/perfil.jpg" class="img-thumbnail" />

		             <h3>Nombre: </h3>ApelllidoPaterno ApellidoMaterno NombreCompleto

		             <h3>Acerca de mi: </h3>
		             <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
		              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
		              ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
		              dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
		              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		             <h3>Objetivo del sitio: </h3>
		             <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
		              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
		              ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
		              dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
		              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		             <h3>Conocimientos: </h3>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
					<strong>JavaScript</strong>&nbsp;&nbsp;&nbsp;&nbsp;60%
					</div>
				</div>
				
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
					<strong>PHP</strong>&nbsp;&nbsp;&nbsp;&nbsp;75%
					</div>
				</div>

				<div class="progress">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
					<strong>HTML5 y CSS3</strong>&nbsp;&nbsp;&nbsp;&nbsp;95%
					</div>
				</div>

				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
					<strong>Base de Datos</strong>&nbsp;&nbsp;&nbsp;&nbsp;80%
					</div>
				</div>

				<div class="progress">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
					<strong>Drupal, Joomla</strong>&nbsp;&nbsp;&nbsp;&nbsp;50%
					</div>
				</div>
			</div>

			<?php
				include 'footer.php';
			?>
		</div> <!-- final container fluid 2-->
	</div> <!-- final container fluid 1-->
</body>
</html>