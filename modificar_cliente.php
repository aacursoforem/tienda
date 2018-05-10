<!DOCTYPE html>
<html>
<head>
	<title>Modificación cliente</title>

</head> 
<body>
<?php
	// Conectamos a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	
	// Cogemos los datos que nos llega desde el formulario
	$dni = $_REQUEST['dni'];
	$nombre = $_REQUEST['nombre'];
	$poblacion = $_REQUEST['poblacion'];	
	$provincia = $_REQUEST['provincia'];
	
	// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
	$sql = "UPDATE clientes SET nombre='$nombre', poblacion='$poblacion', provincia='$provincia' WHERE dni=$dni;" or die ("No ha sido posible actualizar el cliente") ;
	
	// Ejecutamos la sentencia de acción anterior
	mysqli_query($conexion, $sql);
	// Cerramos la conexión a la base de datos
	mysqli_close($conexion);
	
	// Mostramos un mensaje de todo OK al usuario
	// echo "<h3>MODIFICACIÓN REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";

	// Redireccionamos tras haber realizado la actualización del cliente en la BD
	header("location:listado_clientes.php?control=3");
	// Para pruebas, sustituimos la anterior redirección por un enlace equivalente
	//echo'<p><a href="listado_clientes.php?control=3">Ir al listado</a></p>';

?>

</body>
</html>
