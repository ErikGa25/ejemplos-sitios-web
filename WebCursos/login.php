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
		<link rel="stylesheet" type="text/css" href="css/estilos-login.css">
	</head>

	<body>
		<section id="formulario">
			<form action="" name="form_login" method="POST" enctype="">
			<h3>CURSOS INFORMATICOS</h3>
				<fieldset>
					<legend>Ingrese los siguientes datos</legend>	

					<label for="correo">Correo:</label>
					<input type="text" name="txtCorreo" id="correo" />

					<label for="pass">Contraseña:</label>
					<input type="password" name="txtPassword" id="pass" />

					<input type="button" name="btnEntrar" value="Entrar">
				</fieldset>
				<br/>
				<a href="index.php" class="texto1">Regresar</a>&nbsp;&nbsp;&nbsp;
				<a href="registro.php" class="texto2">Registrarse</a>
			</form>
			<br/>
		</section>

		<script type="text/javascript" src="js/validaciones-login.js"></script>
	</body>
</html>