<?php /* Smarty version Smarty-3.1.19, created on 2014-09-21 05:03:22
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10135541c6851310fa9-01156353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97dd552a7bcb32c21928affe36c36578754da96' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1411268599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10135541c6851310fa9-01156353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c685134b937_43045173',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c685134b937_43045173')) {function content_541c685134b937_43045173($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Quesos &quot;NELLY&quot; </title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/queso.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			<div class="row portada">
				<div class="col-xs-6 col-md-6">
					<img src="images/nav.png">
				</div>

				<div class="col-xs-1 col-md-1">
					<a href="login.php">login</a>
				</div>	
				
				<div class="col-xs-1 col-md-1">
					<a href="carrito.php"><img src="images/carrito.jpg"></a>
				</div>	
			</div>
		</header>

		<nav class="navbar navbar-default navbar-inverse">
			<a class="navbar-brand" href="index.php">Inicio</a>
			<a class="navbar-brand" href="listado.php">Productos</a>
			<a class="navbar-brand" href="historia.php">Historia</a>
			<a class="navbar-brand" href="mision.php">Misi&oacute;n</a>
			<a class="navbar-brand" href="valores.php">Valores</a>
			<a class="navbar-brand" href="ubicacion.php">Ubicaci&oacute;n</a>
			<a class="navbar-brand" href="contacto.php">Contacto</a>

			<div class="col-xs-3 col-md-3">
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control"placeholder="Buscar">
					</div>
				</form>
			</div>
			<div class="col-xs-1 col-md-1">
				<button type="submit" class="btn btn-default lupa">
					</button>
			</div>
	    </nav>
<?php }} ?>
