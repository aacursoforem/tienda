<!DOCTYPE html>
<html>
<head>
	<title>Listado de Productos</title>
	<meta charset="utf-8" /> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
			
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">	
		
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.1.js'></script>
		<script type='text/javascript'>
		$(window).load(function(){<!--  w w w.ja v  a2 s.co m-->
			$("#click").click(function() {
				$("#success").html('Hello World!').removeClass("hide").hide().fadeIn("slow");
			});
		});
		</script>	
		
</head> 

<body>
	<div class="jumbotron text-center">
			<h1>Listado de producto</h1>
	</div>
	
	<div class="container">
		<div class="row" style="padding-bottom:10px;">
			<div class="col-sm-6 text-left">
			<?php
				if (isset($_REQUEST['control'])) {
					$cartel = $_REQUEST['control'];
					if ($cartel == 1) {
			?>
					<p class="alert alert-success">Alta realizada con éxito</p>
			<?php
					} else if ($cartel == 2) {
			?>
					<p class="alert alert-danger">Producto eliminado correctamente</p>
			<?php		
					} else if ($cartel == 3) {
			?>
					<p class="alert alert-success">Producto actualizado correctamente</p>
			<?php		
					}
				} 
			?>
			</div>
		
			<div class="col-sm-6 text-right">
				<a href="formulario_alta.php" class="btn btn-primary">Nuevo Producto</a>
				<a href="#" class="btn btn-secondary"><i class="fas fa-arrow-left fa-1x"></i> Panel de Gestión</a>
			</div>		
		</div>
	</div>
	
	
	
	
	
	
		
	<div class="container">
	<table class="table table-striped text-center">
	<thead class="thead-dark">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Modificar</th>
			<th>Eliminar</th>
		</tr>
	<thead>
	<tbody>
<?php


	// Conectamos a la base de datos
	$conexion = mysqli_connect("localhost", "root", "", "tienda") or die ("Error al conectar a la base de datos");
	
	// Preparamos la consulta a realizar. Una consulta de selección devuelve un resultSet 
	$sql = "SELECT * FROM productos" or die ("No ha sido posible dar el alta") or die ("No ha sido posible dar el alta") ;
	// Ejecutamos la consulta y guardamos el resultSet que devuelve en la variable -$registros-)
	$registros = mysqli_query($conexion, $sql);
	mysqli_close($conexion);
	
	// Recorremos el resultSet para ir extrayendo/mostrando los resultados devueltos
	// Vamos guardando cada una de las filas del resultSet en la variable $reg 
	while ( $reg = mysqli_fetch_array($registros) ) {
		?>
		<tr>
			<th><?php echo $reg['codigo']; ?> </th>
			<td><?php echo $reg['nombre']; ?> </td>
			<td><?php echo $reg['categoria'];?></td>
			<td><?php echo $reg['cantidad']; ?></td>
			<td><?php echo $reg['precio']; ?></td>
			<td><a href="formulario_modificar.php?cod=<?php echo $reg['codigo'];?>"><i class="fas fa-edit"></i></a> </td>
			<td><a href="eliminar.php?cod=<?php echo $reg['codigo'];?>"><i class="fas fa-trash-alt"></i></a> </td>
		</tr>
	<?php
	}  // fin while

	?>

	</tbody>
	</table>
		<div class="footer text-center">
			<p>Creado por mi Mismo</p>
		</div>
	</div>
</body>
</html>