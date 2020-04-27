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

			<div><img src="img/landing.png" style="width: 100%; height: 100%;"></div>
			<br/><br/>

			<div class="container">
				<h3>Publicaciones mas recientes</h3>
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						      <img class="media-object" src="img/descarga.png" alt="Imagen">
						</a>
					</div>
					<div class="media-body">
						    <h4 class="media-heading">Novedades en HTML5</h4>
						    <p class="text-justify">
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sapiente architecto alias illo rem distinctio labore voluptatum, quod est saepe ut eius magnam modi iusto atque temporibus. Impedit, eaque. Quos.
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem vel, nihil illo dolores, fugiat sequi ea blanditiis ex! Deleniti quidem iure ut necessitatibus, in autem! Aliquam, earum debitis maxime.
						   </p>
					</div>
				</div>

				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						      <img class="media-object" src="img/descarga.png" alt="Imagen">
						</a>
					</div>
					<div class="media-body">
						    <h4 class="media-heading">PHP y MySQL</h4>
						    <p class="text-justify">
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sapiente architecto alias illo rem distinctio labore voluptatum, quod est saepe ut eius magnam modi iusto atque temporibus. Impedit, eaque. Quos.
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem vel, nihil illo dolores, fugiat sequi ea blanditiis ex! Deleniti quidem iure ut necessitatibus, in autem! Aliquam, earum debitis maxime.
						   </p>
					</div>
				</div>

				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
						      <img class="media-object" src="img/descarga.png" alt="Imagen">
						</a>
					</div>
					<div class="media-body">
						    <h4 class="media-heading">Instalar un servidor local en Debian</h4>
						   <p class="text-justify">
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sapiente architecto alias illo rem distinctio labore voluptatum, quod est saepe ut eius magnam modi iusto atque temporibus. Impedit, eaque. Quos.
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem vel, nihil illo dolores, fugiat sequi ea blanditiis ex! Deleniti quidem iure ut necessitatibus, in autem! Aliquam, earum debitis maxime.
						   </p>
					</div>
				</div>
				<div style="margin-top: 20px;"></div>
				<nav aria-label="...">
					<ul class="pagination">
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<li class="active"><a href="#">1 <span class="sr-only">1</span></a></li>
						<li ><a href="#">2 <span class="sr-only">2</span></a></li>
						<li ><a href="#">3 <span class="sr-only">3</span></a></li>
						<li ><a href="#">4 <span class="sr-only">4</span></a></li>
						<li ><a href="#">5 <span class="sr-only">5</span></a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
					</ul>
				</nav>
				<br/>
			</div>

			<?php
				include 'footer.php';
			?>
		</div> <!-- final container fluid 2-->
	</div> <!-- final container fluid 1-->
</body>
</html>