<!DOCTYPE html>
<html>
<head>
	<title>Listado de Clientes</title>
	<meta charset="utf-8" /> 
	<?php
		include("cdn_local.php");
		
		// include("cdns.php");
	?>
	
</head> 

<body>
	<div class="jumbotron text-center">
			<h1>Listado de clientes</h1>
	</div>
	
	<div class="container">
		<div class="row" style="padding-bottom:10px;">
			<div class="col-sm-6 text-left">
			<?php
			// En caso de que la llamada al fichero incluya una variable de nombre control,
			// dependiendo del valor que tome ésta mostraremos uno u otro mensaje al usuario
				if (isset($_REQUEST['control'])) {
					$control = $_REQUEST['control'];
					//echo'<p style="color:red">El valor de control es: '.$control.'</p>';
					$mensaje =''; $tipoMensaje='success';
					switch ($control)  {
						case -1 : $mensaje='El DNI ya existe en la base de datos'; $tipoMensaje = 'danger';  break;
						case 1 : $mensaje='Alta realizada con éxito'; $tipoMensaje = 'success';  break;
						case 2 : $mensaje='Cliente eliminado correctamente'; $tipoMensaje = 'success';  break;
						case 3 : $mensaje='Cliente actualizado correctamente';  $tipoMensaje = 'success'; break;				
					}
					echo '<p class="alert alert-'.$tipoMensaje.'">'.$mensaje.'</p>';	
				} 
			?>
			</div>
		
			<div class="col-sm-6 text-right">
				<a href="form_alta_cliente.php" class="btn btn-primary">Nuevo Cliente</a>
				<a href="index.html" class="btn btn-secondary"><i class="fas fa-arrow-left fa-1x"></i> Panel de Gestión</a>
			</div>		
		</div>
	</div>
	
	
	<!-- Mostramos la cabecera de la tabla -->
	<div class="container">
	<table class="table table-striped text-center">
	<thead class="thead-dark">
		<tr>
			<th>DNI</th>
			<th>Nombre</th>
			<th>Población</th>			
			<th>Provincia</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>
	<thead>
	<tbody>
<?php
	// Conectamos a la base de datos
	include "conexion.php";	
	
	// Preparamos la consulta a realizar. Una consulta de selección devuelve un resultSet 
	$sql = "SELECT * FROM clientes" or die ("Error buscando clientes");
	// or die(mysqli_errno($conexion) . mysqli_error($conexion));
	
	// Ejecutamos la consulta y guardamos el resultSet que devuelve en la variable -$registros-)
	$registros = mysqli_query($conexion, $sql);
	// Con el resultSet guardado ya en la variable $registros, podemos cerrar la conexión a la BD
	mysqli_close($conexion);
	
	// Recorremos el resultSet para ir extrayendo/mostrando los resultados devueltos
	// Vamos añadiendo a la celda de la tabla el dato tomado del correspondiente valor
	// guardado en el variable $reg
	while ( $reg = mysqli_fetch_array($registros) ) {
		?>
		<tr>
			<th><?php echo $reg['dni']; ?> </th>
			<td><?php echo $reg['nombre']; ?> </td>
			<td><?php echo $reg['poblacion'];?></td>			
			<td><?php echo $reg['provincia']; ?></td>
			<td><a href="form_mod_cliente.php?dni=<?php echo $reg['dni'];?>"><i class="fas fa-edit"></i></a> </td>
			<td><a href="eliminar_cliente.php?dni=<?php echo $reg['dni'];?>"><i class="fas fa-trash-alt"></i></a> </td>
		</tr>
	<?php
	}  // fin while
	// Liberamos los recursos utilizados por mysqli
	mysqli_free_result($registros);
	?>

	</tbody>
	</table>
		<div class="footer text-center">
			<p>Creado por mi Mismo</p>
		</div>
	</div>
</body>
</html>

