<?php
	$variable = "seguridad";
	$variable2 ="123456";
	
	$variableEncriptada = md5($variable);
	$variable2Encriptada = md5($variable2);
	
	echo '<p>La cadena <b>'.$variable.'</b> cifrada con MD5 devuelve <b>'.$variableEncriptada.'</b></p>';
	echo '<p>La cadena <b>'.$variable2.'</b> cifrada con MD5 devuelve <b>'.$variable2Encriptada.'</b></p>';
	
	$passEscribeUsuario = "seguridad1";
	$passEscribeUsuarioEncriptada = md5($passEscribeUsuario);
	
	if ($passEscribeUsuarioEncriptada == $variableEncriptada) {
		echo "pass del usuario y la almacenada son iguales";
	} else {
		echo "pass del usuario y la almacenada son distintas";
	}
	
	
	



?>