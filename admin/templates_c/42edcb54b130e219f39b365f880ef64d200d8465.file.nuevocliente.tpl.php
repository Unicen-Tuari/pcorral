<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 23:55:13
         compiled from ".\templates\nuevocliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830754765a51108b23-41317374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42edcb54b130e219f39b365f880ef64d200d8465' => 
    array (
      0 => '.\\templates\\nuevocliente.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830754765a51108b23-41317374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54765a511fc722_02526413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54765a511fc722_02526413')) {function content_54765a511fc722_02526413($_smarty_tpl) {?><br>
<div class="seccion-chica">
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
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Usuario</span>
			<input class="form-control" type="text" name="usuario" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Contrase&ntilde;a</span>
			<input class="form-control" type="password" name="password">
		</div>
		<div class="form-group col-lg-12 text-center">
			<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
			<button class="color btn col-lg-1 col-lg-offset-2" type="submit">confirmar</button>
		</div>
	</form>
</div><?php }} ?>