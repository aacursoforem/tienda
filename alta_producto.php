<!DOCTYPE html>
<html>
<head>
	<title>Alta producto</title>

</head> 
<body>
<?php
// Conectamos a la base de datos
include("conexion.php");

	
	// Cogemos los datos que nos llega desde el formulario
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['categoria'];
	$cantidad = $_REQUEST['cantidad'];
	$precio = $_REQUEST['precio'];
	
	// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
	$sql = "INSERT INTO productos (nombre, categoria, cantidad, precio) VALUES ('$nombre', '$categoria', $cantidad, $precio);" or die ("No ha sido posible dar el alta") ;
	
	// Ejecutamos la sentencia de acción anterior
	mysqli_query($conexion, $sql);
	mysqli_close($conexion);
	
	// Mostramos un mensaje de todo OK al usuario
	// echo "<h3>ALTA REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";

	// Hacemos una redirección a la página listado_way.php con el parámetro control=1 que indica que se ha introducido sin problemas el nuevo producto en la base de datos
	header("location:listado_productos.php?control=1");

?>

</body>
</html>
