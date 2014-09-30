<?php /* Smarty version Smarty-3.1.19, created on 2014-09-27 22:56:05
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14985420aa58ec10b1-20795613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b793843fba129a836c0897737de108ba7d0b3696' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1411833681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14985420aa58ec10b1-20795613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5420aa58f13141_15624628',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420aa58f13141_15624628')) {function content_5420aa58f13141_15624628($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> F&aacute;brica de Quesos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/queso.css" rel="stylesheet" media="screen">
	</head>

	<body>
		<header>
			<div class="row portada">
				<div class="col-xs-9 col-md-9">
					<img class="img-responsive" src="images/nav.png">
				</div>
				<div class="col-xs-3 col-md-3">
					<a class="navbar-brand negrita" href="login.php">Iniciar Sesi&oacute;n</a>
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
				<div class="navbar-form navbar-right" role="search">
					<input type="text" class="form-control"placeholder="Buscar">
				</div>
			</div>
			<div class="col-xs-1 col-md-1">
				<button type="submit" class="btn btn-default lupa"></button>
			</div>
	    </nav>
<?php }} ?>
