<!DOCTYPE html>
<html>
<head>
	<title>Listado de Productos</title>
		<?php
		include("cdn_local.php");
	?>
</head> 

<body>
	<div class="jumbotron text-center">
			<h1>Listado de productos</h1>
	</div>
	
	<div class="container">
		<div class="row" style="padding-bottom:10px;">
			<div class="col-sm-6 text-left">
			<?php
			// En caso de que la llamada al fichero incluya una variable de nombre control,
			// dependiendo del valor que tome ésta mostraremos uno u otro mensaje al usuario
				if (isset($_REQUEST['control'])) {
					$cartel = $_REQUEST['control'];
					if ($cartel == 1) {
			?>
					<p class="alert alert-success">Alta realizada con éxito</p>
			<?php
					} else if ($cartel == 2) {
			?>
					<p class="alert alert-danger">Producto eliminado correctamente</p>
			<?php		
					} else if ($cartel == 3) {
			?>
					<p class="alert alert-success">Producto actualizado correctamente</p>
			<?php		
					}
				} 
			?>
			</div>
		
			<div class="col-sm-6 text-right">
				<a href="form_alta_producto.php" class="btn btn-primary">Nuevo Producto</a>
				<a href="index.html" class="btn btn-secondary"><i class="fas fa-arrow-left fa-1x"></i> Panel de Gestión</a>
			</div>		
		</div>
	</div>
	
	
	<!-- Mostramos la cabecera de la tabla -->
	<div class="container">
	<table class="table table-striped text-center">
	<thead class="thead-dark">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>
	<thead>
	<tbody>
<?php


	// Conectamos a la base de datos
	include("conexion.php");
	
	// Preparamos la consulta a realizar. Una consulta de selección devuelve un resultSet 
	$sql = "SELECT * FROM productos" or die ("Error buscando productos") ;
	// Ejecutamos la consulta y guardamos el resultSet que devuelve en la variable -$registros-)
	$registros = mysqli_query($conexion, $sql);
	// Con el resultSet guardado ya en la variable $registros, podemos cerrar la conexión a la BD
	mysqli_close($conexion);
	
	// Recorremos el resultSet para ir extrayendo/mostrando los resultados devueltos
	// Vamos añadiendo a la celda de la tabla el dato tomado del correspondiente valor
	// guardado en el variable $reg
	while ( $reg = mysqli_fetch_array($registros) ) {
		?>
		<tr>
			<th><?php echo $reg['codigo']; ?> </th>
			<td><?php echo $reg['nombre']; ?> </td>
			<td><?php echo $reg['categoria'];?></td>
			<td><?php echo $reg['cantidad']; ?></td>
			<td><?php echo $reg['precio']; ?></td>
			<td><a href="form_mod_producto.php?cod=<?php echo $reg['codigo'];?>"><i class="fas fa-edit"></i></a> </td>
			<td><a href="eliminar_producto.php?cod=<?php echo $reg['codigo'];?>"><i class="fas fa-trash-alt"></i></a> </td>
		</tr>
	<?php
	}  // fin while

	?>

	</tbody>
	</table>
		<div class="footer text-center">
			<p>Creado por mi Mismo</p>
		</div>
	</div>
</body>
</html>
