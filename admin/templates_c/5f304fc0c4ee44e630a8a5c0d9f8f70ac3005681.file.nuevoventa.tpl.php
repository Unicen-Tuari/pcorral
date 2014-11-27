<?php /* Smarty version Smarty-3.1.14, created on 2014-11-27 04:29:05
         compiled from ".\templates\nuevoventa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2436354751589831a24-25148298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f304fc0c4ee44e630a8a5c0d9f8f70ac3005681' => 
    array (
      0 => '.\\templates\\nuevoventa.tpl',
      1 => 1417058573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2436354751589831a24-25148298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54751589925623_65085043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54751589925623_65085043')) {function content_54751589925623_65085043($_smarty_tpl) {?><br>
	<div class="seccion-chica">
	<h3>Ingresar Venta</h3>
	<form class="text-left" method="POST" action="" id="form_nuevove">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">ID_venta</span>
			<input class="form-control" type="text" name="id_venta" required autofocus>
		</div>
	<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">ID_cliente</span>
			<input class="form-control" type="text" name="id_clientev" required>
		</div>
		
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">ID_queso</span>
			<input class="form-control" type="text" name="id_quesov" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Cantidad</span>
			<input class="form-control" type="text" name="cantidad">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Precio</span>
			<input class="form-control" type="text" name="precio">
		</div>		
		<div class="form-group col-lg-12 text-center">
			<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
			<button class="color btn col-lg-1 col-lg-offset-2" type="submit">confirmar</button>
		</div>
	</form>
	</div><?php }} ?>