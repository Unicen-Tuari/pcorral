<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 00:49:20
         compiled from ".\templates\tabla_adminque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1113054751580e13058-07116624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '840e4c9b6fa50f56fe1f914a9a63f0f1039d2e46' => 
    array (
      0 => '.\\templates\\tabla_adminque.tpl',
      1 => 1416680632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1113054751580e13058-07116624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quesos' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54751581172fe8_72610904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54751581172fe8_72610904')) {function content_54751581172fe8_72610904($_smarty_tpl) {?><br>
<h3>Productos</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Articulo</th>
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