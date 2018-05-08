<!DOCTYPE html>
<html>
<head>
	<title>Listado de tienda</title>
<!-- 	<meta charset="utf-8" />  -->
</head> 
<body>
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
		echo "Código: ".$reg['codigo']. "<br>";
		echo "Nombre: ".$reg['nombre']. "<br>";
		echo "Categoría: ".$reg['categoria']. "<br>";
		echo "Cantidad: ".$reg['cantidad']. "<br>";
		echo "Precio: ".$reg['precio']. "<br>";
		echo "<hr>";
	}




?>


<h3>Tabla para ponerlo bonito en bootstrap</h3>
<table class="">
<thead>
<tr>
	<th>Código<th>
	<th>Nombre</th>
	<th>Categoría</th>
	<th>Cantidad</th>
	<th>Precio</th>
</tr>
<thead>
<tbody>

<tr>
	<td>$codigo</th>
	<td>$nombre</td>
	<td>$categoria</td>
	<td>$cantidad</td>
	<td>$precio</td>
</tr>

</tbody>
</table>
</body>
</html>