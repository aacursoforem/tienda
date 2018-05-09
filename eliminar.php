<?php

	
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die("Error al conectar a la base de datos");
	
	$codigo = $_REQUEST['cod'];
	$sql = "DELETE FROM productos WHERE codigo=$codigo" or die ("No se pudo borrar el registro");
	
	mysqli_query($conexion, $sql);
	mysqli_close($conexion);
	
	header("location:listado_way.php?control=2");


?>