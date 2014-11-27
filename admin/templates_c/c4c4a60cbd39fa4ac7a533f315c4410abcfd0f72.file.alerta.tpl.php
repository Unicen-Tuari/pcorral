<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 23:55:44
         compiled from ".\templates\alerta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20360547515971b8bc5-76645057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c4a60cbd39fa4ac7a533f315c4410abcfd0f72' => 
    array (
      0 => '.\\templates\\alerta.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20360547515971b8bc5-76645057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547515972e96c5_61095585',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
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