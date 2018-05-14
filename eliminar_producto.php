<?php

	// Conectamos a la base de datos usando el nombre de servidor(localhost), usuario(root), contraseña("") y nombre de la base de datos(tienda)
	include("conexion.php");
	
	// Cogemos el valor de la variable llamada cod que aparece junto al nombre de este script en la barra de direcciones
	$codigo = $_REQUEST['cod'];
	// Preparamos la sentencia para borrar el producto con código = $codigo (= $_GET['cod'])
	$sql = "DELETE FROM productos WHERE codigo=$codigo" or die ("No se pudo borrar el registro");
	// Ejecutamos la sentencia de borrado
	mysqli_query($conexion, $sql);
	// Cerramos la conexión a la base de datos
	mysqli_close($conexion);
	// Tras borrar el dato, redirigimos el navegador a la web del listado con el código de control 2 (se borró de forma correcta el dato de la tabla)
	header("location:listado_productos.php?control=2");


?>
