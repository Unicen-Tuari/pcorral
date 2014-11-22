<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 20:25:29
         compiled from ".\templates\nuevocliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2972454393ae2ab2e67-15896315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42edcb54b130e219f39b365f880ef64d200d8465' => 
    array (
      0 => '.\\templates\\nuevocliente.tpl',
      1 => 1413051846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2972454393ae2ab2e67-15896315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54393ae2e682c3_57115008',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54393ae2e682c3_57115008')) {function content_54393ae2e682c3_57115008($_smarty_tpl) {?><br>
<div class="container">
	<h3>Cliente Nuevo</h3>
	<form class="text-left" method="POST" action="" id="form_nuevocli">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Nombre</span>
			<input class="form-control" type="text" name="nombre" required autofocus>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon detallemodal">Apellido</span>
			<input class="form-control" type="text" name="apellido" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Dirección</span>
			<input class="form-control" type="text" name="direccion" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Telefono</span>
			<input class="form-control" type="tel" name="telefono" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Mail</span>
			<input class="form-control" type="email" name="mail">
		</div> 
		<div class="form-group col-lg-12">
			<button class="btn btn-danger col-lg-1 col-lg-offset-4" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
			<button class="btn btn-success col-lg-1 col-lg-offset-2" type="submit"><span class="glyphicon glyphicon-ok"></span></button>
		</div>
	</form>
</div>
<?php }} ?>