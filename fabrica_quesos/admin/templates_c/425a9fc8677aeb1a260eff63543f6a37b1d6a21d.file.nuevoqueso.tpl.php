<?php /* Smarty version Smarty-3.1.14, created on 2014-10-15 01:06:00
         compiled from ".\templates\nuevoqueso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2893854396070e3b2f3-13691049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425a9fc8677aeb1a260eff63543f6a37b1d6a21d' => 
    array (
      0 => '.\\templates\\nuevoqueso.tpl',
      1 => 1413327943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2893854396070e3b2f3-13691049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54396070f297b2_69722594',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54396070f297b2_69722594')) {function content_54396070f297b2_69722594($_smarty_tpl) {?><br>
	<div class="seccion-chica">
	<h3>Producto Nuevo</h3>
	<form class="text-left" method="POST" action="" id="form_nuevoque">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Articulo</span>
			<input class="form-control" type="text" name="articulo" required autofocus>
		</div>
		<div class="form-group col-lg-12 input-group">
		<span class="input-group-addon detallemodal">Descripcion</span>
			<input class="form-control" type="text" name="descripcion" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Tipo</span>
			<input class="form-control" type="text" name="tipo" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Maduracion</span>
			<input class="form-control" type="text" name="maduracion" required>
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Presentacion</span>
			<input class="form-control" type="text" name="presentacion">
		</div> 
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Conservacion</span>
			<input class="form-control" type="text" name="conservacion">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Imagen</span>
			<input class="form-control" type="text" name="imagen">
		</div>
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">Precio</span>
			<input class="form-control" type="text" name="precio">
		</div>
		<div class="form-group col-lg-12">
			<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
			<button class="color btn col-lg-1 col-lg-offset-2" type="submit">confirmar</button>
		</div>
	</form>
	</div><?php }} ?>