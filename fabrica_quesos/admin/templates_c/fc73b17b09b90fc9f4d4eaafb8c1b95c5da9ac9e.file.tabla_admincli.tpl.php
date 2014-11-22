<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 20:29:02
         compiled from ".\templates\tabla_admincli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2316554393a3ba04dc3-85901770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc73b17b09b90fc9f4d4eaafb8c1b95c5da9ac9e' => 
    array (
      0 => '.\\templates\\tabla_admincli.tpl',
      1 => 1413052136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2316554393a3ba04dc3-85901770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54393a3bea86d3_34726404',
  'variables' => 
  array (
    'clientes' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54393a3bea86d3_34726404')) {function content_54393a3bea86d3_34726404($_smarty_tpl) {?><br>
	<h3>Listado de Clientes</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Apellido</th>
				<th class="text-center">Dirección</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['apellido'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['direccion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['telefono'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['mail'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table><?php }} ?>