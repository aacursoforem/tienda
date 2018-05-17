<!DOCTYPE html>
<html>
	<head>

		<title>Modificación de cliente</title>
		
		<?php
			include("cdn_local.php");
		
		?>
	</head>
	
	<?php
	// print_r($_REQUEST);
	// Tomados de $_REQUEST el valor pasado con el valor del código del producto a modificar
	$dni = $_REQUEST['dni'];
	// Conectamos a la base de datos
	include("conexion.php");
	
	// Preparamos la sentencia que devolverá los datos del cliente cuyo dni es el pasado
	$sql = "SELECT * FROM clientes WHERE dni='$dni'" or die("No existe el cliente en la base de datos");
	// Ejecutamos la consulta obteniendo el vector $registro con el resultado 
	$registro = mysqli_query($conexion, $sql);
	// Del resultSet obtenido en la consulta, asignamos a $reg una fila de resultados como un array asociativo
	$reg = mysqli_fetch_assoc($registro);  // Obtener una fila de resultados como un array asociativo
	//$reg = mysqli_fetch_array($registro);  // Obtiene una fila de resultados como un array asociativo, numérico, o ambos
	//$reg = mysqli_fetch_row($registro);  // Obtener una fila de resultados como un array enumerado
	
	// Guardamos en distintas variables las partes del resultSet devuelvo como respuesta a nuestra consulta a la base de datos 
	$dni = $reg['dni'];
	$nombre = $reg['nombre'];
	$poblacion = $reg['poblacion'];	
	$provincia = $reg['provincia'];
	
	// Ya podemos cerrar la conexión con la base de datos
	mysqli_close($conexion);
	
	// Mostramos el formulario con los valores del registro a modificar obtenidos antes de la BD
	?>
	<body>
		<div class="jumbotron text-center">
			<h1>Modificación de cliente</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="modificar_cliente.php">
				<div class="form-group text-left">
					<label for="dni">DNI del cliente</label>
					<input class="form-control" type="text" name="dni" id="dni" value="<?php echo $dni; ?>" readonly="readonly" />
					<!-- En el input anterior en lugar de readonly se puede poner del tipo hidden (en cuyo caso deberíamos también eliminar el label que lo precede) -->
				</div>
				
				<div class="form-group text-left">
					<label for="nombre">Nombre del producto</label>
					<input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" />
				</div>
				<div class="form-group text-left">
					<label for="poblacion">Población</label>
					<input class="form-control" type="text" name="poblacion" id="poblacion" value="<?php echo $poblacion; ?>" />
				</div>
				<div class="form-group text-left">
					<label for="provincia">Provincia</label>
					<input class="form-control" type="text" id="provincia" name="provincia" value="<?php echo $provincia; ?>"/> 
				</div>

				<div class="form-group text-center">
					
					<!-- 
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
					-->
					<a href="listado_clientes.php" class="btn btn-primary" role="button"><i class="fas fa-arrow-left fa-1x"></i> Volver al listado</a>
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Modificar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	
