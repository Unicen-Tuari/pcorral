<?php /* Smarty version Smarty-3.1.19, created on 2014-09-21 04:17:56
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2169541cbdeaed0316-20193719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a88f32638cc7aeb2cea809d3861073a8c09b41' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1411265872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169541cbdeaed0316-20193719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541cbdeb17e105_95837420',
  'variables' => 
  array (
    'producto' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541cbdeb17e105_95837420')) {function content_541cbdeb17e105_95837420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="container">

<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value) {
$_smarty_tpl->tpl_vars['queso']->_loop = true;
?>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<h2> <?php echo $_smarty_tpl->tpl_vars['queso']->value['nombre'];?>
 </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-md-6">
			<p><?php echo $_smarty_tpl->tpl_vars['queso']->value['descripcion'];?>
</p>
			<ul id='listDePropiedades'>
				<li>Maduraci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['maduracion'];?>
 d&iacute;as</li>
				<li>Presentaci&oacute;n: Horma <?php echo $_smarty_tpl->tpl_vars['queso']->value['presentacion'];?>
 kg.</li>
				<li>Conservaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['conservacion'];?>
 &deg;.</li>
			</ul>
			<button type="submit" class="btn btn-default bot" onclick="location.href='carrito.php'">comprar</button>
		</div>
		<div class="col-xs-4 col-md-4">
			<img src="<?php echo $_smarty_tpl->tpl_vars['queso']->value['imagen'];?>
">
		</div>
	</div>

		
<?php } ?>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
