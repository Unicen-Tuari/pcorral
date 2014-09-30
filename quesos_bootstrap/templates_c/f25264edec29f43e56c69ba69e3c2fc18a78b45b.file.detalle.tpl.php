<?php /* Smarty version Smarty-3.1.19, created on 2014-09-27 17:54:00
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64025420b5f27fca44-12304916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25264edec29f43e56c69ba69e3c2fc18a78b45b' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1411833237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64025420b5f27fca44-12304916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5420b5f2abfb78_44128035',
  'variables' => 
  array (
    'producto' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420b5f2abfb78_44128035')) {function content_5420b5f2abfb78_44128035($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="container">

<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value) {
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
			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['queso']->value['imagen'];?>
">
		</div>
	</div>

		
<?php } ?>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
