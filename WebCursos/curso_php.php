<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sitio dedicado a impartir cursos sobre lenguajes de programación.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Cursos Informáticos</title>
		<link rel="stylesheet" type="text/css" href="css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/estilos-curso.css">
	</head>

	<body>
		<?php 
			include('menu-principal.php');
		?>

		<section id="contenido">
			<section id="principal">
				<article class="informacion-curso">
					<h2>Curso de PHP</h2><br/>
					<h3>Temario</h3><br/>
					<ol>
						<li>
							<strong>Introducción e instalación</strong>
							<ul>
								<li>Conceptos de programación e informática.</li>
								<li>Instalación en Windows.</li>
								<li>El fichero de configuración.</li>
							</ul>
						</li>

						<li>
							<strong>Sintaxis en PHP</strong>
							<ul>
								<li>Mi primer script.</li>
								<li>Tipos de datos.</li>
								<li>Variables.</li>
								<li>Vectores y matrices.</li>
							</ul>
						</li>

						<li>
							<strong>MySQL</strong>
							<ul>
								<li>Expresiones.</li>
								<li>Operadores aritméticos.</li>
								<li>Operadores de cadena.</li>
								<li>Operadores de asignación.</li>
							</ul>
						</li>

						<li>
							<strong>SQL y MySQL</strong>
							<ul>
								<li>Bases de datos.</li>
								<li>Sintaxis de excepciones.</li>
								<li>Tipos de excepciones.</li>
								<li>Implementación.</li>
							</ul>
						</li>

						<li>
							<strong>Otros</strong>
							<ul>
								<li>Bases de datos.</li>
								<li>Sintaxis de excepciones.</li>
								<li>Tipos de excepciones.</li>
								<li>Implementación.</li>
							</ul>
						</li>
					</ol>
					<h3>Costo</h3>
					<p>$2500.00</p><br/>
					<h3>Horario y d&iacute;as que se imparte el curso</h3>
					<p>Lunes a Viernes de 7:00 a 10:00</p><br/>
				</article>
			</section>

			<aside>
				<a class="twitter-timeline" href="https://twitter.com/TwitterDev" data-width="300" data-height="500" >
				Tweets by TwitterDev</a> 
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</aside>
		</section>

		<?php
			include('footer.php');
		?>
	</body>
</html>