<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:31:00
         compiled from ".\templates\listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10120547565946dcab3-75595904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424176c0cc6736f8339ef20dadf5a733624b5c10' => 
    array (
      0 => '.\\templates\\listado.tpl',
      1 => 1416768994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10120547565946dcab3-75595904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nombre_queso' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475659492e736_67606175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475659492e736_67606175')) {function content_5475659492e736_67606175($_smarty_tpl) {?>

<section class="container top">
<div class="row">
<div class="col-xs-6 col-md-6">
<div class="row">

	<h2 class="marg"> Productos </h2>
		
	<div id="contenedor" class="carrusel">

		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombre_queso']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
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
 $_from = $_smarty_tpl->tpl_vars['nombre_queso']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
				<div class="item">
<form class="formulario" method="GET" action="consulta_queso">					
	 <button type="submit" name="quesito" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" >
	 	<input hidden="quesito" name="quesito" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
">
			<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['imagen'];?>
">
		</button>
</form>				
				</div>
				<?php } ?>	
			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><p class="indicador">&laquo;</p></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"><p class="indicador">&raquo;</p></a>
		</div>
	</div>	
</div>
</div>
<div class="col-xs-6 col-md-6">
	<div class="row">
	<form id="form_consulta" method="GET" action="consulta_queso">	
		<div class="typeahead-container">
            <div class="input-group trasparente">
                <span class="typeahead-query">
                    <input id="q" name="quesito" class="form-control" type="search" placeholder="Buscar" autocomplete="off">
                </span>
                <span class="input-group-btn">
                    <button type="submit" class="btn color">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
	</form>	
</div>

	<div class="row">
	<div class="col-lg-6" id="descripcion_queso"></div>
</div>
</div>
</div>
</section>
<script type="text/javascript" src="./js/autocompletar.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>