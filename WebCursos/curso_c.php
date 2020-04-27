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
					<h2>Curso de C#</h2><br/>
					<h3>Temario</h3><br/>
					<ol>
						<li>
							<strong>La arquitectura .NET </strong>
							<ul>
								<li>C# y su lugar dentro de .NET</li>
								<li>Common Language Runtime</li>
								<li>Microsoft Intermediate Language</li>
							</ul>
						</li>

						<li>
							<strong>Introducción a Visual Studio 2015 y C#</strong>
							<ul>
								<li>Características de C#</li>
								<li>Estructura de un programa</li>
								<li>Compilación y ejecución</li>
								<li>Vectores y matrices.</li>
							</ul>
						</li>

						<li>
							<strong>Tipo predefinidos y control de flujo</strong>
							<ul>
								<li>Tipos predefinidos de C#</li>
								<li>Tipos de referencia</li>
								<li>Sentencias condicionales</li>
								<li>Ciclos de repetición</li>
							</ul>
						</li>

						<li>
							<strong>Clases y objetos</strong>
							<ul>
								<li>Conceptos básicos de POO</li>
								<li>Creación de clases</li>
								<li>Constructores</li>
								<li>Propiedades</li>
								<li>Atributos y métodos de instancia</li>
							</ul>
						</li>
					</ol>
					<h3>Costo</h3>
					<p>$1840.00</p><br/>
					<h3>Horario y d&iacute;as que se imparte el curso</h3>
					<p>Lunes a Viernes de 13:00 a 16:00</p><br/>
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