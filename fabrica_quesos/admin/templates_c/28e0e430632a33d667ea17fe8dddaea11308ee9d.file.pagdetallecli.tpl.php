<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 20:08:37
         compiled from ".\templates\pagdetallecli.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121405439722533c373-96798664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28e0e430632a33d667ea17fe8dddaea11308ee9d' => 
    array (
      0 => '.\\templates\\pagdetallecli.tpl',
      1 => 1408978345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121405439722533c373-96798664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detallecli' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543972256b6e41_13587391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543972256b6e41_13587391')) {function content_543972256b6e41_13587391($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Detalle del Cliente</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_cli">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['id'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_n" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['nombre'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Apellido</span>
			<input class="form-control input-sm" type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['apellido'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Dirección</span>
			<input class="form-control input-sm" type="text" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['direccion'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Telefono</span>
			<input class="form-control input-sm" type="tel" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['telefono'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['detallecli']->value['mail'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracli" class="btn btn-danger col-lg-3 pull-left"><span class="glyphicon glyphicon-trash"></span></button>
			<button type="button" id="boton_modificacli" class="btn btn-primary col-lg-3 pull-right"><span class="glyphicon glyphicon-edit"></span></button>
		</div>
	</div>
</form><?php }} ?>