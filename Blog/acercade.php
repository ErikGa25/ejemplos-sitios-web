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
			<?php
				include 'menu-principal.php';
			?>
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