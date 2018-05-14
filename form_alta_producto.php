<!DOCTYPE html>
<html>
	<head>

		<title>Alta de producto</title>
		
			<?php
		include("cdn_local.php");
	?>

	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Alta de producto</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="alta_producto.php">
				<div class="form-group text-left">
					<label for="nombre">Nombre del producto</label>
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" />
				</div>
				<div class="form-group text-left">
					<label for="categoria">Categoría del producto</label>
					<input class="form-control" type="text" name="categoria" id="categoria" placeholder="Ingrese categoría" />
				</div>
				<div class="form-group text-left">
					<label for="cantidad">Cantidad</label>
					<input class="form-control" type="number" min="0" step="1" id="cantidad" name="cantidad"/> 
				</div>
				<div class="form-group text-left">
					<label for="precio">Precio</label>
					<input class="form-control" type="number" min="0" step="0.01" id="precio" name="precio" />
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
	
