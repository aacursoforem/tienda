<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Alta de producto</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">


		<style type="text/css">

		</style>
		

	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Alta de producto</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="alta.php">
				<div class="form-group text-left">
					<label for="nombre">Nombre del producto</label>
					<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" />
				</div>
				<div class="form-group row text-left">
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
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Aceptar</button>
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	