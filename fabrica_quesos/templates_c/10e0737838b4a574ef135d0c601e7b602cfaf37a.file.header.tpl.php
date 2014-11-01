<?php /* Smarty version Smarty-3.1.14, created on 2014-10-25 01:42:53
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250915441a4e4921932-89735109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1414194144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250915441a4e4921932-89735109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441a4e4929631_30611590',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441a4e4929631_30611590')) {function content_5441a4e4929631_30611590($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> F&aacute;brica de Quesos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/queso.css" rel="stylesheet" media="screen">
		<script src="./js/jquery-1.11.1.min.js"></script>
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