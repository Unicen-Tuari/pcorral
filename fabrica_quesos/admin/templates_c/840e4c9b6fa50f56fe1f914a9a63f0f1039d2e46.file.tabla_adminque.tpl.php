<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 20:29:12
         compiled from ".\templates\tabla_adminque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2802154396056aa3435-55022122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840e4c9b6fa50f56fe1f914a9a63f0f1039d2e46' => 
    array (
      0 => '.\\templates\\tabla_adminque.tpl',
      1 => 1413052130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2802154396056aa3435-55022122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54396056e54a10_62960538',
  'variables' => 
  array (
    'quesos' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54396056e54a10_62960538')) {function content_54396056e54a10_62960538($_smarty_tpl) {?><br>
<h3>Listado de Productos</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Tipo</th>
				<th class="text-center">Maduracion</th>
				<th class="text-center">Presentacion</th>
				<th class="text-center">Conservacion</th>
				<th class="text-center">Precio</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quesos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value){
$_smarty_tpl->tpl_vars['queso']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['descripcion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['tipo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['maduracion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['presentacion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['conservacion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['queso']->value['precio'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>