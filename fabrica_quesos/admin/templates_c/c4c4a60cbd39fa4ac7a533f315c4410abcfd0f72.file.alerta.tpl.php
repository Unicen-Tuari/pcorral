<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 17:05:22
         compiled from ".\templates\alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:403854394732dd1f14-26625655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c4a60cbd39fa4ac7a533f315c4410abcfd0f72' => 
    array (
      0 => '.\\templates\\alerta.tpl',
      1 => 1408978345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '403854394732dd1f14-26625655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54394733283771_72170865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54394733283771_72170865')) {function content_54394733283771_72170865($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-12 alert alert-success fade in margenb" id="alerta">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>