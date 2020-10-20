<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Instituto Everest</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos.css">
	<link rel="shortcut icon" href="img/everest.ico" type="image/x-icon">

</head>
<body>
	<img src="<?php echo base_url();?>img/background-login.jpg" class="img-fluid" width="100%" heigth="100%" alt="">
	<div class="contenedor">
	<form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<div class="bg">
			<img  src="<?php echo base_url();?>img/InstitutoEverest.png" alt="Instituto Everest" width="70%" heigth="auto" >
			
		</div>
		<div class="bg-1">
			<img src="<?php echo base_url();?>img/enlinea.png" alt="Universidad en Línea" width="50%" heigth="auto" >
		</div>

		
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Ingresar matricula o usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="password" placeholder="Ingresar contraseña">
			</div>
			<button class="btn btn-primary btn-block glyphicon glyphicon-log-in" type="submit">Ingresar</button>
			
			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>
				 	 	
	</div>
</body>
</html>