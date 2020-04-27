<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sitio dedicado a impartir cursos sobre lenguajes de programacion.">
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
			<article class="seccion-acerca" >
				<br/>
				<h2>Nuestra Empresa</h2>
				<img src="img/edificio.jpg">
				<p>
					<!-- start slipsum code -->
					Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
					<!-- end slipsum code -->
				</p>
				<br/>
				<h2>Misi&oacute;n</h2>
				<p>
					<!-- start slipsum code -->
					Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
					<!-- end slipsum code -->
				</p>
				<br/>
				<h2>Visi&oacute;n</h2>
				<p>
					<!-- start slipsum code -->
					Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
					<!-- end slipsum code -->
				</p>
			</article>
			<br/>
			<article class="seccion-acerca">
				<form action="" name="form_acerca" method="POST" enctype="">
					<fieldset>
						<legend>Dudas o sugerencias</legend>	
						<label for="correo">Correo:</label>
						<input type="text" name="txtCorreo" id="correo" />

						<label for="asunto">Asunto:</label>
						<input type="text" name="txtAsunto" id="asunto" />

						<label for="comentarios">Comentarios:</label>
						<textarea name="txtComentarios" id="comentarios" cols="31" rows="6"></textarea>

						<input type="button" name="btnEnviar"  value="Enviar">
					</fieldset>
				</form>
			</article>
			<br/>
		</section>

		<?php
			include('footer.php');
		?>

		<script type="text/javascript" src="js/validaciones-acerca.js"></script>
	</body>
</html>