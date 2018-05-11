<?php

	// Conectamos a la base de datos usando el nombre de servidor(localhost), usuario(root), contraseña("") y nombre de la base de datos(tienda)
	include "conexion.php";
	
	
	// Cogemos el valor de la variable llamada cod que aparece junto al nombre de este script en la barra de direcciones
	$dni = $_REQUEST['dni'];
	// Preparamos la sentencia para borrar el producto con código = $codigo (= $_GET['cod'])
	$sql = "DELETE FROM clientes WHERE dni='$dni'" or die ("No se pudo borrar el registro");
	//echo $sql;
	// TODO: Se observa que si el valor en $dni no es válido, no se devuelve ningún error
	// Utilizar la instrucción SQL que nos devuelve el número de filas afectadas en la última operación
	// para confirmar que el registro se ha borrado correctamente
	
	// Ejecutamos la sentencia de borrado
	mysqli_query($conexion, $sql);
	// Cerramos la conexión a la base de datos
	mysqli_close($conexion);
	// Tras borrar el dato, redirigimos el navegador a la web del listado con el código de control 2 (se borró de forma correcta el dato de la tabla)
	header("location:listado_clientes.php?control=2");
	//echo'<p><a href="listado_clientes.php?control=2">Volver al listado de clientes</a></p>';


?>
