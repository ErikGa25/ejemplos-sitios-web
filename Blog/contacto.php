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
	<script type="text/javascript" src="js/validaciones-contacto.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="container-fluid">
			<?php
				include 'menu-principal.php';
			?>

			<div class="container">
				<div class="panel panel-info">
					<div class="panel-heading"><strong>Datos de Contacto</strong></div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">Correo: mi_correo@hotmail.com</li>
							<li class="list-group-item">Teléfono: 55-12-23-22-33</li>
							<li class="list-group-item">
								Redes Sociales: <br/><br/><a href="#">Twitter</a>&nbsp;&nbsp;<a href="#">GitHub</a>&nbsp;&nbsp;<a href="#">LinkedIn</a>
							</li>
						</ul>
					</div>
				</div>
				<br/>
				<form class="form-horizontal">
					<h3>Dudas o Sugerencias:</h3>
					<br/>
					
					<div class="form-group">
						<label for="correo" class="col-sm-2 control-label">Correo</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="correo" placeholder="Correo">
						</div>
					</div>
					
					<div class="form-group">
						<label for="asunto" class="col-sm-2 control-label">Asunto</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="asunto" placeholder="Asunto">
						</div>
					</div>
					
					<div class="form-group">
						<label for="mensaje" class="col-sm-2 control-label">Mensaje</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" id="mensaje" style="resize: none;"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success" id="enviar">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<br/>
			<?php
				include 'footer.php';
			?>
		</div> <!-- final container fluid 2-->
	</div> <!-- final container fluid 1-->
</body>
</html>