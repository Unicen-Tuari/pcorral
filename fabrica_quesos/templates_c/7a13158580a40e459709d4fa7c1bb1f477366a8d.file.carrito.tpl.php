<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:31:09
         compiled from ".\templates\carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74945475659d285552-17733346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a13158580a40e459709d4fa7c1bb1f477366a8d' => 
    array (
      0 => '.\\templates\\carrito.tpl',
      1 => 1416890872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74945475659d285552-17733346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrProductos' => 0,
    'datosProductos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475659d3f8739_42242040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475659d3f8739_42242040')) {function content_5475659d3f8739_42242040($_smarty_tpl) {?>
<section class="container">
<form id ="comprar" >	
	<h2> Carrito de Compras </h2>
	
	<div class="modal-body tt">
	<div class="row fila">
		<div class="col-xs-5 col-md-5">
			<h4> Producto </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Cant. </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Precio </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Importe </h4>
		</div>
	</div>

<?php  $_smarty_tpl->tpl_vars['datosProductos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosProductos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrProductos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosProductos']->key => $_smarty_tpl->tpl_vars['datosProductos']->value){
$_smarty_tpl->tpl_vars['datosProductos']->_loop = true;
?>
	<div class="row lista">
	<div class="col-xs-5 col-md-5">
			<p> <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['nombre'];?>
 </p>		
	</div>
		<div class="col-xs-2 col-md-2">
			<p><?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['cantidad'];?>
</p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $ <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['precio'];?>
 </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $ <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['subtotal'];?>
 </p>
		</div>
		<div class="col-xs-1 col-md-1">
			<button value="Borrar" onclick="clickBorrar(<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['id'];?>
)"><span class="glyphicon glyphicon-trash"></span></button>	
		</div>
	</div>

<?php } ?>	
	<div class="row fila">
		<div class="col-xs-9 col-md-9">
			<h4>Total</h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4>$ <?php echo $_smarty_tpl->tpl_vars['datosProductos']->value['total'];?>
</h4>
		</div>
	</div>

</div>
<input type = "submit" class="btn btn-default bot" value="Comprar"/>
	
</form>
</section>
<?php }} ?>