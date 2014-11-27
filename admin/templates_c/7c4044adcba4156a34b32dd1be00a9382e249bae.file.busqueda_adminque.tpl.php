<?php /* Smarty version Smarty-3.1.14, created on 2014-11-27 04:25:30
         compiled from ".\templates\busqueda_adminque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19698547533c0673f36-74833604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c4044adcba4156a34b32dd1be00a9382e249bae' => 
    array (
      0 => '.\\templates\\busqueda_adminque.tpl',
      1 => 1417058559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19698547533c0673f36-74833604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547533c08866c5_69350732',
  'variables' => 
  array (
    'detalleventa' => 0,
    'tru' => 0,
    'venta' => 0,
    'prod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547533c08866c5_69350732')) {function content_547533c08866c5_69350732($_smarty_tpl) {?><br>
	<h3>Ventas</h3>
	<table class="table table-bordered table-hover">
		
		<thead>
			<?php  $_smarty_tpl->tpl_vars['venta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['venta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detalleventa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['venta']->key => $_smarty_tpl->tpl_vars['venta']->value){
$_smarty_tpl->tpl_vars['venta']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['tru']->value){?>
			<?php $_smarty_tpl->tpl_vars['tru'] = new Smarty_variable(0, null, 0);?>
					<h4 class="text-left margensito">ID <?php echo $_smarty_tpl->tpl_vars['venta']->value['id'];?>
</h4>
					<h4 class="text-left margensito">Cliente <?php echo $_smarty_tpl->tpl_vars['venta']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['venta']->value['apellido'];?>
</h4>
					
			<?php }?>
			<?php } ?>
		</thead>
		
		<tbody>
			<tr class="active">
				<th class="text-center">articulo</th>
				<th class="text-center">precio unitario</th>
				<th class="text-center">cantidad</th>
			</tr>
		
			<?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detalleventa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value){
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['articulo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['precio'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['cantidad'];?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table> 
	<?php }} ?>