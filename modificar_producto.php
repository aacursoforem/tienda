<!DOCTYPE html>
<html>
<head>
	<title>Modificación producto</title>

</head> 
<body>
<?php
	// Conectamos a la base de datos
	include("conexion.php");

	
	// Cogemos los datos que nos llega desde el formulario
	$codigo = $_REQUEST['codigo'];
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['categoria'];
	$cantidad = $_REQUEST['cantidad'];
	$precio = $_REQUEST['precio'];
	
	// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
	$sql = "UPDATE productos SET nombre='$nombre', categoria='$categoria', cantidad=$cantidad, precio=$precio WHERE codigo=$codigo;" or die ("No ha sido posible actualizar el producto") ;
	
	// Ejecutamos la sentencia de acción anterior
	mysqli_query($conexion, $sql);
	// Cerramos la conexión a la base de datos
	mysqli_close($conexion);
	
	// Mostramos un mensaje de todo OK al usuario
	// echo "<h3>MODIFICACIÓN REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";

	// Redireccionamos tras haber realizado la actualización del producto en la BD
	header("location:listado_productos.php?control=3");
	// Para pruebas, sustituimos la anterior redirección por un enlace equivalente
	//echo'<p><a href="listado_way.php?control=3">Ir al listado</a></p>';

?>

</body>
</html>
