<!DOCTYPE html>
<html>
<head>
	<title>Alta tienda</title>
	<meta charset="utf-8">
</head> 
<body>
<?php
// Conectamos a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	//mysqli_set_charset("UTF8", $conexion);
	mysqli_query($conexion, "SET NAMES 'utf8'");
	
	$nombre = "PropPlusPack";
	$categoria = "Informática";
	$cantidad = 52;
	$precio = 41.20;
	
	$sql = "INSERT INTO productos (nombre, categoria, cantidad, precio) VALUES ('$nombre', '$categoria', $cantidad, $precio);" or die ("No ha sido posible dar el alta") ;
	
	mysqli_query($conexion, $sql );
	
	echo "<h3>ALTA REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";



?>

<body>
</html>