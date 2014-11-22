<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 16:34:51
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205995439400b6b1ac9-35782997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1408978345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205995439400b6b1ac9-35782997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439400b7ced88_80316452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439400b7ced88_80316452')) {function content_5439400b7ced88_80316452($_smarty_tpl) {?><!DOCTYPE html>	
<html>
<head>
	<title>TT Taller de Reparacion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="../css/own.css" media="screen">
</head>
<body>
	<div class="container">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<legend class="text-center">DataOS Administración</legend>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div> 
	<script type="text/javascript" src="../js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/admin.js"></script>
</body>
</html><?php }} ?>