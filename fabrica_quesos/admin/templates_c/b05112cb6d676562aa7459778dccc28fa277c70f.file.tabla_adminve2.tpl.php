<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 04:27:18
         compiled from ".\templates\tabla_adminve2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15113547545e8ea7954-69968624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b05112cb6d676562aa7459778dccc28fa277c70f' => 
    array (
      0 => '.\\templates\\tabla_adminve2.tpl',
      1 => 1416972422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15113547545e8ea7954-69968624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547545e94a1f60_27142465',
  'variables' => 
  array (
    'art' => 0,
    'ventas' => 0,
    'venta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547545e94a1f60_27142465')) {function content_547545e94a1f60_27142465($_smarty_tpl) {?><br>
	<h3>Ventas</h3>
		<h4 class="text-left margensito"> Producto <?php echo $_smarty_tpl->tpl_vars['art']->value;?>
 </h4>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Apellido</th>
				<th class="text-center">Nombre</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['venta']->value['apellido'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['venta']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['venta']->value['cantidad'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>