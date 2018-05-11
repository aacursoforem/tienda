<!DOCTYPE html>
<html>
<head>
	<title>Modificación usuario</title>

</head> 
<body>
<?php
	// Conectamos a la base de datos
	include("conexion.php");
		
	//print_r($_POST);
	// Cogemos los datos que nos llega desde el formulario
	$id = $_POST['id'];
	$usuario = $_POST['user'];
	$pass = $_POST['pass'];
	$cifrada = md5($pass);
	$tipo = $_POST['type'];
	
	// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
	$sql = "UPDATE usuarios SET nombre='$usuario', contra='$cifrada', tipo=$tipo WHERE id=$id;" or die ("No ha sido posible actualizar el dato") ;
	
	// Ejecutamos la sentencia de acción anterior
	mysqli_query($conexion, $sql);
	// Cerramos la conexión a la base de datos
	mysqli_close($conexion);
	
	// Mostramos un mensaje de todo OK al usuario
	// echo "<h3>MODIFICACIÓN REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";

	// Redireccionamos tras haber realizado la actualización del cliente en la BD
	//header("location:listado_usuarios.php?control=3");
	// Para pruebas, sustituimos la anterior redirección por un enlace equivalente
	echo'<p><a href="listado_usuarios.php?control=3">Ir al listado</a></p>';

?>

</body>
</html>
