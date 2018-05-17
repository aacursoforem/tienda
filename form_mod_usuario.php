<!DOCTYPE html>
<html>
	<head>

		<title>Modificación de usuario</title>
		
		<?php
			include("cdn_local.php");
		?>

	</head>
	
	<?php
	//print_r($_REQUEST);
	// Tomados de $_REQUEST el valor pasado con el valor del código del producto a modificar
	$id = $_REQUEST['id'];
	// Conectamos a la base de datos
	include("conexion.php");
	
	// Preparamos la sentencia que devolverá los datos del cliente cuyo dni es el pasado
	$sql = "SELECT * FROM usuarios WHERE id=$id" or die("No existe el usuario en la base de datos");
	// Ejecutamos la consulta obteniendo el vector $registro con el resultado 
	$registro = mysqli_query($conexion, $sql);
	// Del resultSet obtenido en la consulta, asignamos a $reg una fila de resultados como un array asociativo
	$reg = mysqli_fetch_assoc($registro);  // Obtener una fila de resultados como un array asociativo
	//$reg = mysqli_fetch_array($registro);  // Obtiene una fila de resultados como un array asociativo, numérico, o ambos
	//$reg = mysqli_fetch_row($registro);  // Obtener una fila de resultados como un array enumerado
	
	// Guardamos en distintas variables las partes del resultSet devuelvo como respuesta a nuestra consulta a la base de datos 
	$id = $reg['id'];
	$nombre = $reg['nombre'];
	$contra = $reg['contra'];	
	$tipo = $reg['tipo'];
	
	// Ya podemos cerrar la conexión con la base de datos
	mysqli_close($conexion);
	
	// Mostramos el formulario con los valores del registro a modificar obtenidos antes de la BD
	?>
	<body>
		<div class="jumbotron text-center">
			<h1>Modificación de usuario</h1>
		</div>
	<div class="container">
		<div class="row"> <!-- 12 filas de división -->
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="post" action="modificar_usuario.php">
				
				
				<div class="form-group text-left">
						<label for="id">Id</label>
						<input class="form-control" type="text" name="id" id="id" value="<?php echo $id; ?>" readonly="readonly" />
					</div>
				
				<div class="form-group text-left">
						<label for="user">Usuario</label>
						<input class="form-control" type="text" name="user" id="user" value="<?php echo $nombre; ?>" />
					</div>
					
				<div class="form-group text-left">
					<label for="pass">Contraseña</label>
					<input class="form-control" type="password" id="pass" name="pass" value="<?php echo $contra; ?>"/> 
				</div>
					
				<div class="form-group text-left">
					<label for="type">Tipo</label>
					<select class="form-control" id="type" name="type" >
						<option value="1" <?php if ($tipo == 1) { echo'selected="selected"'; } ?>>Administrador</option>
						<option value="2" <?php if ($tipo == 2) { echo'selected="selected"'; } ?>>Invitado</option>
						<option value="3" <?php if ($tipo == 3) { echo'selected="selected"'; } ?>>Usuario</option>
					</select>						
				</div>
				
				

				<div class="form-group text-center">
					
					<!--
					<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>-->
					<a href="listado_usuarios.php" class="btn btn-primary" role="button"><i class="fas fa-arrow-left fa-1x"></i> Volver al listado</a>
					<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Modificar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>
	
