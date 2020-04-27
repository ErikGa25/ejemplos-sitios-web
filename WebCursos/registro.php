<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Sitio dedicado a impartir cursos sobre lenguajes de programacion.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Cursos Informáticos</title>
		<link rel="stylesheet" type="text/css" href="css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/estilos-login.css">
	</head>

	<body>
		<section id="contenido">
			<section id="formulario">
				<form action="" name="form_registro" id="form-regis" method="POST" enctype="">
				<h3>CURSOS INFORMATICOS</h3>
					<fieldset>
						<legend>Ingrese los siguientes datos</legend>	
						
						<label for="nombre">Nombre Completo:</label>
						<input type="text" name="txtNombre" id="nombre" />

						<label for="telefono">Teléfono:</label>
						<input type="text" name="txtTelefono" id="telefono" />

						<label for="correo">Correo:</label>
						<input type="text" name="txtCorreo" id="correo" />

						<label for="pass">Contraseña:</label>
						<input type="password" name="txtPassword" id="pass" />

						<input type="submit" name="btnRegistro" id="registro" value="Registrarse">
					</fieldset>
					<br/>
					<a href="index.php" class="texto1">Regresar</a>&nbsp;&nbsp;&nbsp;
					<a href="login.php" class="texto2">Login</a>
				</form>
				<br/>
			</section>
		</section>

		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/validaciones-registro.js"></script>
	</body>
</html>