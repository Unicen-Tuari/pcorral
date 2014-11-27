<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 19:20:16
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118865475657605d9f4-14400943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1417026013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118865475657605d9f4-14400943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475657632c699_79955654',
  'variables' => 
  array (
    'nombreUsuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475657632c699_79955654')) {function content_5475657632c699_79955654($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Sal&oacute;n de Quesos</title>
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
				<div class="collapse navbar-collapse navbar-ex1-collapse">
		    
			
			</div>
				</div>	
				</div>	
			
			
			
			
		</header>

		<nav class="navbar navbar-default">
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_index">Inicio</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=listar_quesos">Productos</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_historia">Historia</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_mision">Misi&oacute;n</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_valores">Valores</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_ubicacion">Ubicaci&oacute;n</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_contacto">Contacto</a>
<ul class="nav navbar-nav navbar-right">

		      <li class="hide"><a href="#"><span class="txtnav">Mis Compras &nbsp </span> <span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
				<li class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown">
				<span class="txtnav"><?php echo $_smarty_tpl->tpl_vars['nombreUsuario']->value;?>
 </span> <b class="caret"></b> </a>

				<?php if (($_smarty_tpl->tpl_vars['nombreUsuario']->value=="Loguearse / Registrarse")){?>
						<?php echo $_smarty_tpl->getSubTemplate ("menu_no_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->getSubTemplate ("menu_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

				<?php }?>
				</li>

			</ul>
			</nav>

	
	<div id= "mostrar_info"></div><?php }} ?>