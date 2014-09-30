<?php /* Smarty version Smarty-3.1.19, created on 2014-09-21 04:03:14
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13358541da86cdfd716-22013896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68b7ef83936a6acf0e2f90c1e86e88f05f7dbc8' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1411264991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13358541da86cdfd716-22013896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541da86cf07141_61349614',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541da86cf07141_61349614')) {function content_541da86cf07141_61349614($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="container compras">
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
			<button>x</button>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
