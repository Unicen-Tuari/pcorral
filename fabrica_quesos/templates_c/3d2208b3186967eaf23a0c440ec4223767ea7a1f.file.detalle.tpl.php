<?php /* Smarty version Smarty-3.1.14, created on 2014-09-28 21:02:13
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237865426f297d02339-25760325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2208b3186967eaf23a0c440ec4223767ea7a1f' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1411930926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237865426f297d02339-25760325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5426f297e36cf0_39897058',
  'variables' => 
  array (
    'nombre_queso' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5426f297e36cf0_39897058')) {function content_5426f297e36cf0_39897058($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombre_queso']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value){
$_smarty_tpl->tpl_vars['queso']->_loop = true;
?>
	<div class="row">
		<div class="col-xs-8 col-md-8">
			<h2> <?php echo $_smarty_tpl->tpl_vars['queso']->value['nombre'];?>
 </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 col-md-8">
			<p><?php echo $_smarty_tpl->tpl_vars['queso']->value['descripcion'];?>
</p>
			<ul>
				<li>Maduraci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['maduracion'];?>
 d&iacute;as</li>
				<li>Presentaci&oacute;n: Horma <?php echo $_smarty_tpl->tpl_vars['queso']->value['presentacion'];?>
 kg.</li>
				<li>Conservaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['conservacion'];?>
 &deg;.</li>
			</ul>
			<button type="submit" class="btn btn-default bot" onclick="location.href='carrito.php?id=<?php echo $_smarty_tpl->tpl_vars['queso']->value['id'];?>
'">comprar</button>
		</div>
		<div class="col-xs-4 col-md-4">
			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['queso']->value['imagen'];?>
">
		</div>
	</div>

<?php } ?>
<?php }} ?>