<!DOCTYPE html>
<html lang="es">
	<head>

		<title>Alta de cliente</title>
		
		<?php
			include("cdn_local.php");
		?>
		

	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Alta de cliente</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="alta_cliente.php">
				<div class="form-group text-left">
					<label for="dni">DNI del cliente</label>
					<input class="form-control" type="text" name="dni" id="dni" placeholder="Ingrese DNI" />
				</div>
				<div class="form-group text-left">
					<label for="nombre">Nombre del cliente</label>
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" />
				</div>
				
				<div class="form-group text-left">
					<label for="poblacion">Población</label>
					<input class="form-control" type="text" id="poblacion" name="poblacion"/> 
				</div>
				<div class="form-group text-left">
					<label for="provincia">Provincia</label>
					<input class="form-control" type="text"  id="provincia" name="provincia" />
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Guardar</button>
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	
