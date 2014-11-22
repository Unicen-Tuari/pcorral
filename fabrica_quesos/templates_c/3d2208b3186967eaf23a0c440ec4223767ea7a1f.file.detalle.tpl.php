<?php /* Smarty version Smarty-3.1.14, created on 2014-11-02 01:55:38
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208345441b0ee126c99-91299524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d2208b3186967eaf23a0c440ec4223767ea7a1f' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1413769473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208345441b0ee126c99-91299524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441b0ee2e8080_90286024',
  'variables' => 
  array (
    'nombre_queso' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441b0ee2e8080_90286024')) {function content_5441b0ee2e8080_90286024($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombre_queso']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value){
$_smarty_tpl->tpl_vars['queso']->_loop = true;
?>
	<div class="row">
			<h2> <?php echo $_smarty_tpl->tpl_vars['queso']->value['nombre'];?>
 </h2>
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