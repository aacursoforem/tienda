<!DOCTYPE html>
<html>
	<head>

		<title>Modificación de producto</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
				
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	
	<?php
	// Tomados de $_REQUEST el valor pasado con el valor del código del producto a modificar
	$codigo = $_REQUEST['cod'];
	// Conectamos a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	// Preparamos la sentencia que devolverá los datos del producto cuyo código es el pasado
	$sql = "SELECT * FROM productos WHERE codigo=$codigo" or die("No existe el producto en la base de datos");
	// Ejecutamos la consulta obteniendo el vector $registro con el resultado 
	$registro = mysqli_query($conexion, $sql);
	// Del resultSet obtenido en la consulta, asignamos a $reg una fila de resultados como un array asociativo
	$reg = mysqli_fetch_assoc($registro);  // Obtener una fila de resultados como un array asociativo
	//$reg = mysqli_fetch_array($registro);  // Obtiene una fila de resultados como un array asociativo, numérico, o ambos
	//$reg = mysqli_fetch_row($registro);  // Obtener una fila de resultados como un array enumerado
	
	// Guardamos en distintas variables las partes del resultSet devuelvo como respuesta a nuestra consulta a la base de datos 
	$codigo = $reg['codigo'];
	$nombre = $reg['nombre'];
	$categoria = $reg['categoria'];
	$cantidad = $reg['cantidad'];
	$precio = $reg['precio'];
	
	// Ya podemos cerrar la conexión con la base de datos
	mysqli_close($conexion);
	
	// Mostramos el formulario con los valores del registro a modificar obtenidos antes de la BD
	?>
	<body>
		<div class="jumbotron text-center">
			<h1>Modificación de producto</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="modificar.php">
				<div class="form-group text-left">
					<label for="nombre">Código del producto</label>
					<input class="form-control" type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>" readonly="readonly" />
					<!-- En el input anterior en lugar de readonly se puede poner del tipo hidden (en cuyo caso deberíamos también eliminar el label que lo precede) -->
				</div>
				
				<div class="form-group text-left">
					<label for="nombre">Nombre del producto</label>
					<input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" />
				</div>
				<div class="form-group text-left">
					<label for="categoria">Categoría del producto</label>
					<input class="form-control" type="text" name="categoria" id="categoria" value="<?php echo $categoria; ?>" />
				</div>
				<div class="form-group text-left">
					<label for="cantidad">Cantidad</label>
					<input class="form-control" type="number" min="0" step="1" id="cantidad" name="cantidad" value="<?php echo $cantidad; ?>"/> 
				</div>
				<div class="form-group text-left">
					<label for="precio">Precio</label>
					<input class="form-control" type="number" min="0" step="0.01" id="precio" name="precio" value="<?php echo $precio; ?>"/>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Modificar</button>
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	
