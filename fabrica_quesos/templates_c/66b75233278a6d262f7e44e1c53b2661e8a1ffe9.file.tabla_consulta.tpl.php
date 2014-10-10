<?php /* Smarty version Smarty-3.1.14, created on 2014-09-27 19:13:42
         compiled from ".\templates\tabla_consulta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126875425e975052ad1-38365747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b75233278a6d262f7e44e1c53b2661e8a1ffe9' => 
    array (
      0 => '.\\templates\\tabla_consulta.tpl',
      1 => 1411838013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126875425e975052ad1-38365747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5425e9755b5a96_73535430',
  'variables' => 
  array (
    'reparaciones' => 0,
    'queso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425e9755b5a96_73535430')) {function content_5425e9755b5a96_73535430($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['queso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['queso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reparaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php }} ?>