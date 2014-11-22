<?php /* Smarty version Smarty-3.1.14, created on 2014-11-20 20:20:12
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205995439400b6b1ac9-35782997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1416511208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205995439400b6b1ac9-35782997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439400b7ced88_80316452',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439400b7ced88_80316452')) {function content_5439400b7ced88_80316452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<legend class="text-center">Salon de Quesos Administración</legend>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn bot btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>