<?php /* Smarty version Smarty-3.1.14, created on 2014-10-18 03:10:50
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36225441be1adb7c57-31067057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a13158580a40e459709d4fa7c1bb1f477366a8d' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1412476135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36225441be1adb7c57-31067057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441be1af3a832_32242254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441be1af3a832_32242254')) {function content_5441be1af3a832_32242254($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section class="container seccion-media">
	<h2> Carrito de Compras </h2>
	<div class="row fila">
		<div class="col-xs-5 col-md-5">
			<h4> Producto </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Cantidad </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Precio </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Subtotal </h4>
		</div>
	</div>

	<div class="row lista">
		<div class="col-xs-5 col-md-5">
			<p> Parmesano </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			</select>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $200 </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $200 </p>
		</div>
		<div class="col-xs-1 col-md-1">
			<button><span class="glyphicon glyphicon-trash"></span></button>
		</div>
	</div>
	<div class="row fila">
		<div class="col-xs-9 col-md-9">
			<h4>Total</h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4>$200</h4>
		</div>
	</div>
	<button type="submit" class="btn btn-default bot">comprar</button>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>