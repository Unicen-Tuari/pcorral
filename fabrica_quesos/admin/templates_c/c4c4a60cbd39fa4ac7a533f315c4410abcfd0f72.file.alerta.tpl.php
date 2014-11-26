<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 00:49:43
         compiled from ".\templates\alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20360547515971b8bc5-76645057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c4a60cbd39fa4ac7a533f315c4410abcfd0f72' => 
    array (
      0 => '.\\templates\\alerta.tpl',
      1 => 1416944011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20360547515971b8bc5-76645057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547515972e96c5_61095585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547515972e96c5_61095585')) {function content_547515972e96c5_61095585($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="aler col-lg-12 alert alert-success fade in margenb" id="alerta">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	</div>
</div> 
<?php }} ?>