<!DOCTYPE html>
<html>
<head>
	<title>Listado de Productos</title>
	<meta charset="utf-8" /> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">	
</head> 

<body>
	<div class="jumbotron text-center">
			<h1>Listado de producto</h1>
	</div>
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
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	
	// Preparamos la consulta a realizar. Una consulta de selección devuelve un resultSet 
	$sql = "SELECT * FROM productos" or die ("No ha sido posible dar el alta") or die ("No ha sido posible dar el alta") ;
	// Ejecutamos la consulta y guardamos el resultSet que devuelve en la variable -$registros-)
	$registros = mysqli_query($conexion, $sql);
	
	// Recorremos el resultSet para ir extrayendo/mostrando los resultados devueltos
	// Vamos guardando cada una de las filas del resultSet en la variable $reg 
	while ( $reg = mysqli_fetch_array($registros) ) {
		echo '<tr>';
		echo '<th>'.$reg['codigo'].'</th>';
		echo '<td>'.$reg['nombre'].'</td>';
		echo '<td>'.$reg['categoria'].'</td>';
		echo '<td class="text-right">'.$reg['cantidad'].'</td>';
		echo '<td class="text-right">'.$reg['precio'].'</td>';
		echo'<td><a href="#" class=""><i class="fas fa-edit fa-2x"></i></a> </td>';
		echo'<td><a href="#" class=""><i class="fas fa-trash-alt fa-2x"></i></a> </td>';
		echo'</tr>';
	}

?>

	</tbody>
	</table>
	</div>
</body>
</html>