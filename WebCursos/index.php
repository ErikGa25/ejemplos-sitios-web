<!--
Autor: Erik García
Se uso FlexSlider 2.6.1  |  Sitio web: https://www.woothemes.com/flexslider/
-->
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sitio dedicado a impartir cursos sobre lenguajes de programacion.">
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
				<article id="mi-slide">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="img/c.png" alt="C#">
								<p class="flex-caption">Curso de C#</p>
							</li>

							<li>
								<img src="img/php.jpg" alt="PHP y MySQL">
								<p class="flex-caption">Curso de PHP y MySQL</p>
							</li>

							<li>
								<img src="img/java.jpg" alt="Java">
								<p class="flex-caption">Java</p>
							</li>
						</ul>
					</div>
				</article>
				<h1>CURSOS INFORMATICOS</h1>
				<br/>
				<article id="cursos-texto">
					<a href="curso_java.php"><h3>Curso de Java</h3></a>
					<p>
						<!-- start slipsum code -->
						Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
						<!-- end slipsum code -->
					</p>
					<br/>
					<a href="curso_php.php"><h3>Curso de PHP y MySQL</h3></a>
					<p>
						<!-- start slipsum code -->
						Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
						<!-- end slipsum code -->
					</p>
					<br/>
					<a href="curso_c.php"><h3>Curso de C#</h3></a>
					<p>
						<!-- start slipsum code -->
						Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
						<!-- end slipsum code -->
					</p>
					<br/>
				</article>
			</section>

			<aside>
				<a class="twitter-timeline" href="https://twitter.com/TwitterDev" data-width="300" data-height="600" >
				Tweets by TwitterDev</a> 
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</aside>
		</section>

		<?php
			include('footer.php');
		?>

		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide"
				});
			});
		</script>
	</body>
</html>