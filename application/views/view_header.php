<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Instituto Everest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>css/estilos.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/everest.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand1">
        <a  href="#"></a><img src="<?php echo base_url();?>img/InstitutoEverest.png" width="25%" heigth="25%"  alt="Logo Insitituto Everest">
        </div>
        <div class="navbar-brand2" >
        <a href="#"></a><img src="<?php echo base_url();?>img/instituto.png" width="50%" heigth="50%"  alt="Logo Insitituto Everest">
        </div>
        <div class="navbar-brand3">
        <a  href="#"></a><img src="<?php echo base_url();?>img/linea.png"width="40%" heigth="40%"  alt="Logo Insitituto Everest">
        </div>

        <div class="container1">
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
				<input type="text" class="input" placeholder="search...">
				<div class="btn btn_common">
					<i class="fas fa-search"></i>
				</div>
			</div>
		</div>
</div>
  </div>
</nav>
</body>
</html>