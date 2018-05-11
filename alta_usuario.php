<!DOCTYPE html>
<html>
<head>
	<title>Alta usuario</title>

</head> 
<body>
<?php
// Conectamos a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	
	// Cogemos los datos que nos llega desde el formulario
	$usuario = $_POST['user'];
	$pass = $_POST['pass'];
	$cifrada = md5($pass);
	$tipo = $_POST['type'];
	
	
	$busquedas=mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE nombre='$usuario'") or die(mysqli_error($conexion));
	$resultados = mysqli_num_rows($busquedas);
	if ($resultados > 0) {
		echo "Ya existe el usuario";
		$codigoDevuelto = -1;			
		// Liberamos los recursos utilizados en las consultas
		mysqli_free_result($busquedas);
	} else {		
		// Creamos la sentencia de acción SQL para guardar los datos recogidos por fomulario en la base de datos
		$sql = "INSERT INTO usuarios (nombre, contra, tipo) VALUES ('$usuario', '$cifrada', '$tipo');" or die ("No ha sido posible dar el alta") ;		
		$codigoDevuelto = 1;
		// Ejecutamos la sentencia de acción anterior
		mysqli_query($conexion, $sql);		
		// Mostramos un mensaje de todo OK al usuario
		// echo "<h3>ALTA REALIZADA CON ÉXITO!!! CORRE Y CUÉNTASELO A TUS AMIGOS</h3>";		
	}
	
		
		
		// Cerramos la conexión a la base de datos
		mysqli_close($conexion);
		// Hacemos una redirección a la página listado_clientes.php con el parámetro control=1 que indica que se ha introducido sin problemas el nuevo producto en la base de datos
		header("location:listado_usuarios.php?control=".$codigoDevuelto);
		//echo'<p><a href="listado_clientes.php?control='.$codigoDevuelto.'">listado</a></p>';
	
?>

</body>
</html>
