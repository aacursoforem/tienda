<!DOCTYPE html>
<html lang="es">
	<head>
	<title>Alta de usuario</title>
	<?php
		include("cdn_local.php");
	?>


	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Alta de Usuarios</h1>
		</div>
		
		<div class="container">
			<div class="row"> <!-- 12 filas de división -->
				<div class="col-sm-6 offset-sm-3 text-center">
					<form method="post" action="alta_usuario.php">
					
					<div class="form-group text-left">
						<label for="user">Usuario</label>
						<input class="form-control" type="text" name="user" id="user" placeholder="Ingrese usuario" />
					</div>
					
					<div class="form-group text-left">
						<label for="pass">Contraseña</label>
						<input class="form-control" type="password" id="pass" name="pass"/> 
					</div>
					
					<div class="form-group text-left">
						<label for="type">Tipo</label>
						<select class="form-control" id="type" name="type" >
							<option value="1">Administrador</option>
							<option value="2">Invitado</option>
							<option value="3">Usuario</option>
						</select>						
					</div>
					<div class="form-group text-center">
						<button class="btn btn-primary" type="submit"><i class="fas fa-save fa-1x"></i> Guardar</button>
						<button class="btn btn-danger" type="reset"><i class="fas fa-ban fa-1x"></i> Cancelar</button>
					</div>
					</form>
				</div>
			</div>
				
		
		</div>
	
	
	</body>
	</html>