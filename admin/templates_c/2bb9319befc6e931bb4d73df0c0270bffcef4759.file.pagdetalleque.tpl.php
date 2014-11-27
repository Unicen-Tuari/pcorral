<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 23:56:21
         compiled from ".\templates\pagdetalleque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2751854765a95b1ff36-76221071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bb9319befc6e931bb4d73df0c0270bffcef4759' => 
    array (
      0 => '.\\templates\\pagdetalleque.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2751854765a95b1ff36-76221071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detalleque' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54765a95d71bc6_24788608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54765a95d71bc6_24788608')) {function content_54765a95d71bc6_24788608($_smarty_tpl) {?><div class="modal-header">
	<h4 class="modal-title">Detalle del Queso</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_que">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_que" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['id'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_n" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['nombre'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Descripcion</span>
			<input class="form-control input-sm" type="text" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['descripcion'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Tipo</span>
			<input class="form-control input-sm" type="text" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['tipo'];?>
" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Maduracion</span>
			<input class="form-control input-sm" type="text" name="maduracion" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['maduracion'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Presentacion</span>
			<input class="form-control input-sm" type="text" name="presentacion" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['presentacion'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Conservacion</span>
			<input class="form-control input-sm" type="text" name="conservacion" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['conservacion'];?>
" readonly>
		</div>

		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="imagen" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['imagen'];?>
" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['detalleque']->value['precio'];?>
" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borraque" class="color btn col-lg-3 pull-left">eliminar</button>
			<button type="button" id="boton_modificaque" class="color btn col-lg-3 pull-right">editar</button>
		</div>
	</div>
</form><?php }} ?>