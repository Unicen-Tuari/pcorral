<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 23:55:04
         compiled from ".\templates\tabla_admincli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3077554752a828acf07-14171867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc73b17b09b90fc9f4d4eaafb8c1b95c5da9ac9e' => 
    array (
      0 => '.\\templates\\tabla_admincli.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3077554752a828acf07-14171867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54752a82b4b406_97243133',
  'variables' => 
  array (
    'clientes' => 0,
    'cliente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54752a82b4b406_97243133')) {function content_54752a82b4b406_97243133($_smarty_tpl) {?><br>
	<h3>Clientes</h3>
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