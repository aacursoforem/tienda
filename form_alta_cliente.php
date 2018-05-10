<!DOCTYPE html>
<html lang="es">
	<head>

		<title>Alta de cliente</title>
		
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.css" /> -->
	
		<script src="../bootstrap/js/bootstrap.min.js" ></script>		
		<script src="../bootstrap/js/bootstrap.bundle.min.js"> </script>
		<script src="../bootstrap/js/jquery-3.3.1.slim.min.js"> </script>
		<script src="../bootstrap/js/popper.min.js"> </script>
	
		<script defer src="../bootstrap/js/fontawesome-free-5.0.12/svg-with-js/js/fontawesome-all.js"></script>

<!--		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
-->
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
	
