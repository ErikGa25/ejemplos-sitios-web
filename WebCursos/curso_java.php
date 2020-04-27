<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sitio dedicado a impartir cursos sobre lenguajes de programación.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Cursos Informáticos</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml"/>
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
					<h2>Curso de Java</h2><br/>
					<h3>Temario</h3><br/>
					<ol>
						<li>
							<strong>INTRODUCCION A LA PROGRAMACIÓN ORIENTADA A OBJETOS.</strong>
							<ul>
								<li>El Paradigma de la orientación a objetos.</li>
								<li>Definición de clases, objetos, herencia y polimorfismo.</li>
								<li>Lenguajes de programación orientados a objetos.</li>
							</ul>
						</li>

						<li>
							<strong>CLASES Y OBJETOS.</strong>
							<ul>
								<li>Definición de clase y objeto.</li>
								<li>Atributos.</li>
								<li>Métodos.</li>
								<li>Sobrecarga de Métodos.</li>
								<li>Mensajes.</li>
								<li>Encapsulación.</li>
								<li>Constructores.</li>
								<li>Destructores.</li>
							</ul>
						</li>

						<li>
							<strong>HERENCIA.</strong>
							<ul>
								<li>Definición.</li>
								<li>Polimorfismo.</li>
								<li>Herencia simple.</li>
								<li>Herencia múltiple.</li>
							</ul>
						</li>

						<li>
							<strong>EXCEPCIONES.</strong>
							<ul>
								<li>Definición.</li>
								<li>Sintaxis de excepciones.</li>
								<li>Tipos de excepciones.</li>
								<li>Implementación.</li>
							</ul>
						</li>

						<li>
							<strong>INTERFASES GRAFICAS.</strong>
							<ul>
								<li>Creación de ventanas.</li>
								<li>Eventos.</li>
								<li>Gráficos.
								<li>Ejemplos prácticos de POO con</li> interfases gráficas.</li>
							</ul>
						</li>

						<li>
							<strong>ARCHIVOS.</strong>
							<ul>
								<li>Creación de un archivo.</li>
								<li>Consulta de un archivo.</li>
								<li>Modificación de un archivo.</li>
								<li>Eliminación de un archivo.</li>
							</ul>
						</li>
					</ol>
					<h3>Costo</h3>
					<p>$1500.00</p><br/>
					<h3>Horario y d&iacute;as que se imparte el curso</h3>
					<p>Lunes a Viernes de 10:00 a 13:00</p><br/>
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