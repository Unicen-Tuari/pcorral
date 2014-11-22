<?php /* Smarty version Smarty-3.1.14, created on 2014-10-18 03:39:43
         compiled from "C:\xampp\htdocs\pau_9_autobusqueda\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305955441c24f4c11d1-07299867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d5abb82954fc30ce2f1fafe7005051c6649f214' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pau_9_autobusqueda\\templates\\header.tpl',
      1 => 1413596195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305955441c24f4c11d1-07299867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441c24f4c8ed5_54909591',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441c24f4c8ed5_54909591')) {function content_5441c24f4c8ed5_54909591($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> F&aacute;brica de Quesos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/queso.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="css/jquery.typeahead.css">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="./js/jquery.typeahead.js"></script>
	</head>

	<body>
		<header>
			<div class="row portada">
				<div class="col-xs-9 col-md-9">
					<img class="img-responsive" src="images/nav.png">
				</div>
				<div class="col-xs-3 col-md-3">
					<a class="navbar-brand negrita" href="admin/login.php">Iniciar Sesi&oacute;n</a>
					<a href="carrito.php"><img src="images/carrito.jpg"></a>
				</div>	
			</div>
		</header>

		<nav class="navbar navbar-default">
			<a class="navbar-brand" href="index.php">Inicio</a>
			<a class="navbar-brand" href="listado.php?action=listar_quesos">Productos</a>
			<a class="navbar-brand" href="historia.php">Historia</a>
			<a class="navbar-brand" href="mision.php">Misi&oacute;n</a>
			<a class="navbar-brand" href="valores.php">Valores</a>
			<a class="navbar-brand" href="ubicacion.php">Ubicaci&oacute;n</a>
			<a class="navbar-brand" href="contacto.php">Contacto</a>
		</nav>
<?php }} ?>