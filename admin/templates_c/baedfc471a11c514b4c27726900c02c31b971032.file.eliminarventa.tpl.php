<?php /* Smarty version Smarty-3.1.14, created on 2014-11-27 04:29:27
         compiled from ".\templates\eliminarventa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296105475517d7c4361-12160914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baedfc471a11c514b4c27726900c02c31b971032' => 
    array (
      0 => '.\\templates\\eliminarventa.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296105475517d7c4361-12160914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475517d87b061_42397149',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475517d87b061_42397149')) {function content_5475517d87b061_42397149($_smarty_tpl) {?><br>
<div class="seccion-chica">
	<h3>Eliminar Venta</h3>
	<form class="text-left" method="POST" action="" id="form_eliminarventa">
		<div class="form-group col-lg-12 input-group">
			<span class="input-group-addon detallemodal">ID compra </span>
			<input class="form-control" type="text" name="id_ventaaa" required autofocus>
		</div>
		<div class="form-group col-lg-12 text-center">
			<button class="color btn col-lg-1 col-lg-offset-2" type="submit">eliminar</button>
		</div>
	</form>
</div><?php }} ?>