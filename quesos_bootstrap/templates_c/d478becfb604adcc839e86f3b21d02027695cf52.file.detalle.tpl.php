<?php /* Smarty version Smarty-3.1.19, created on 2014-08-27 15:49:00
         compiled from ".\templates\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774353fdd4b09f2893-29207090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd478becfb604adcc839e86f3b21d02027695cf52' => 
    array (
      0 => '.\\templates\\detalle.tpl',
      1 => 1409147337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774353fdd4b09f2893-29207090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fdd4b0b65a60_60767121',
  'variables' => 
  array (
    'producto' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fdd4b0b65a60_60767121')) {function content_53fdd4b0b65a60_60767121($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class = "contacto">

<?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['queso']->key => $_smarty_tpl->tpl_vars['queso']->value) {
$_smarty_tpl->tpl_vars['queso']->_loop = true;
?>
	<h1> <?php echo $_smarty_tpl->tpl_vars['queso']->value['nombre'];?>
 </h1>
	<p><?php echo $_smarty_tpl->tpl_vars['queso']->value['descripcion'];?>
</p>
	<img src="<?php echo $_smarty_tpl->tpl_vars['queso']->value['imagen'];?>
">
	<ul id='listDePropiedades'>
		<li>Maduraci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['maduracion'];?>
 d&iacute;as</li>
		<li>Presentaci&oacute;n: Horma <?php echo $_smarty_tpl->tpl_vars['queso']->value['presentacion'];?>
 kg.</li>
		<li>Conservaci&oacute;n: <?php echo $_smarty_tpl->tpl_vars['queso']->value['conservacion'];?>
 &deg;.</li>
	</ul>
<?php } ?>


</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
