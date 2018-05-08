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
	// Para que no haya problemas con las tildes y caracteres tipical Spain
	//mysqli_set_charset("UTF8", $conexion);
	mysqli_query($conexion, "SET NAMES 'utf8'");
	
	// la siguiente instrucción imprime el contenido del array $_REQUEST por pantalla
	// print_r($_REQUEST);
	
	// Cogemos los datos que nos llega desde el formulario
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['categoria'];
	$cantidad = $_REQUEST['cantidad'];
	$precio = $_REQUEST['precio'];
	
	// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
	$sql = "INSERT INTO productos (nombre, categoria, cantidad, precio) VALUES ('$nombre', '$categoria', $cantidad, $precio);" or die ("No ha sido posible dar el alta") ;
	
	// Ejecutamos la sentencia de acción anterior
	mysqli_query($conexion, $sql);
	
	// Mostramos un mensaje de todo OK al usuario
	echo "<h3>ALTA REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";



?>

</body>
</html>