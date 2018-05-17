<!DOCTYPE html>
<html>
	<head>

		<title>Modificación de producto</title>
		
			<?php
		include("cdn_local.php");
	?>
	</head>
	
	<?php
	// Tomados de $_REQUEST el valor pasado con el valor del código del producto a modificar
	$codigo = $_REQUEST['cod'];
	// Conectamos a la base de datos
	include("conexion.php");
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
				<form method="get" action="modificar_producto.php">
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
					
					<!--
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
					-->
					<a href="listado_productos.php" class="btn btn-primary" role="button"><i class="fas fa-arrow-left fa-1x"></i> Volver al listado</a>
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Modificar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	
