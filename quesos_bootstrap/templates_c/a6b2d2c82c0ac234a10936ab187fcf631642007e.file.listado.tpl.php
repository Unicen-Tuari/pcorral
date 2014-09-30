<?php /* Smarty version Smarty-3.1.19, created on 2014-09-27 17:52:55
         compiled from ".\templates\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152515420ad73ba41d5-19619063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b2d2c82c0ac234a10936ab187fcf631642007e' => 
    array (
      0 => '.\\templates\\listado.tpl',
      1 => 1411833144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152515420ad73ba41d5-19619063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5420ad73e82887_37691634',
  'variables' => 
  array (
    'galeria' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420ad73e82887_37691634')) {function content_5420ad73e82887_37691634($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="container seccion-chica">
	<h2> PRODUCTOS </h2>
	<div id="contenedor" class="carrusel">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
"></li>
				<?php } ?>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/salon.jpg">
				</div>	
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
				<div class="item">
				<a href="detalle.php?id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
">
				<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['imagen'];?>
">
				</a>
				</div>
				<?php } ?>	
			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><p class="indicador">&laquo;</p></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"><p class="indicador">&raquo;</p></a>
		</div>
	</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
