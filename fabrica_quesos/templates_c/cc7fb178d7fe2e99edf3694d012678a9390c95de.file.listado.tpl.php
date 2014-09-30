<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 23:36:02
         compiled from ".\templates\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3231542b2242c1cb05-29572142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7fb178d7fe2e99edf3694d012678a9390c95de' => 
    array (
      0 => '.\\templates\\listado.tpl',
      1 => 1409146515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3231542b2242c1cb05-29572142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b2242e28279_11698628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b2242e28279_11698628')) {function content_542b2242e28279_11698628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class = "informacion">
	<h1> PRODUCTOS </h1>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<a href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['imagen'];?>
">
			</a>
		<?php }
if (!$_smarty_tpl->tpl_vars['img']->_loop) {
?>
			No hay imagenes
		<?php } ?>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
