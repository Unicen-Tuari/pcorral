<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 04:27:11
         compiled from ".\templates\tabla_adminve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133285475321ac42329-98654583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd9c3b27b764552a38d66ced6d868e82ef8651f4' => 
    array (
      0 => '.\\templates\\tabla_adminve.tpl',
      1 => 1416972422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133285475321ac42329-98654583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475321ad35f22_07366197',
  'variables' => 
  array (
    'nomb' => 0,
    'apell' => 0,
    'ventas' => 0,
    'venta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475321ad35f22_07366197')) {function content_5475321ad35f22_07366197($_smarty_tpl) {?><br>
	<h3>Ventas</h3>
	<h4 class="text-left margensito"> Cliente <?php echo $_smarty_tpl->tpl_vars['nomb']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apell']->value;?>
 </h4>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Articulo</th>
				<th class="text-center">Cantidad</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['venta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['venta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ventas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['venta']->key => $_smarty_tpl->tpl_vars['venta']->value){
$_smarty_tpl->tpl_vars['venta']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['venta']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['venta']->value['cantidad'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>