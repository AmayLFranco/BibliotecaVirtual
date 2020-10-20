<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url();?>css/widget.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<!--Encabezados-->
 <div class="texto1">
	<h1><strong>Estos son nuestros libros sugeridos</strong></h1>
 </div>

 <div class="texto2">
	<h2>Estos son algunos de nuestros libros disponibles</h2>
 </div>
<!--border-->
	<hr class="border"></hr>
    <br><br><b>
 <!--CATEGORY WIDGET START-->
 <div class="list-group">
	<strong><h2>Categorias</h2></strong> <br>
	 <hr class="border1"></hr><br>
	<a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Historia</a></br>
    <a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Programación</a> <br>
    <a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Matematicas</a> <br>
	<a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Geografia</a> <br>
	<a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Historia</a></br>
    <a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Programación</a> <br>
    <a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Matematicas</a> <br>
    <a href="#" class="list-group-item"><i class='fas fa-angle-right'></i>Geografia</a> <br>
  </div>

<!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel" style="width:300px;margin:auto;">

<!-- Indicators -->
<ol class="carousel-indicators">
	<li data-target="#my-pics" data-slide-to="0" class="active"></li>
	<li data-target="#my-pics" data-slide-to="1"></li>
	<li data-target="#my-pics" data-slide-to="2"></li>
	<li data-target="#my-pics" data-slide-to="3"></li>
	<li data-target="#my-pics" data-slide-to="4"></li>
</ol>
<a href="#" class="btn btn- btn-block btn">Ver todo</a>

<!-- Content -->

<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="item active">
	<img src="<?php echo base_url();?>img/book.jpg" alt="Book">
	<h2 style="text-align: center;">Autoestima</h2>
	<button class="button button1">Ver</button>
	<button class="button button2">Descargar</button>
</div>


<!-- Slide 2 -->
<div class="item">
	<img src="<?php echo base_url();?>img/book.jpg" alt="Book1">
	<h2 style="text-align: center;">Autoestima</h2>
	<button class="button button1">Ver</button>
	<button class="button button2">Descargar</button>
	
</div>

<!-- Slide 3 -->
<div class="item">
	<img src="<?php echo base_url();?>img/book.jpg" alt="Book2">
	<h2 style="text-align: center;">Autoestima</h2>
	<button class="button button1">Ver</button>
	<button class="button button2">Descargar</button>
</div>

<!-- Slide 4 -->
<div class="item">
	<img src="<?php echo base_url();?>img/book.jpg" alt="Book2">
	<h2 style="text-align: center;">Autoestima</h2>
	<button class="button button1">Ver</button>
	<button class="button button2">Descargar</button>
	
</div>


