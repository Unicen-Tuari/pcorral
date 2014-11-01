<?php /* Smarty version Smarty-3.1.14, created on 2014-10-25 02:14:42
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3818544aeb35134d18-48520531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1414196079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3818544aeb35134d18-48520531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_544aeb35163b28_34162711',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544aeb35163b28_34162711')) {function content_544aeb35163b28_34162711($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="nav nav-tabs tab_container">
					<li><a data-toggle="tab" href="#tablaclientes" id="tab_clientes"><span class="glyphicon gly1 glyphicon-user"></span></a></li>
					<li><a data-toggle="tab" href="#tablaquesos" id="tab_quesos"><span class="glyphicon glyphicon-hdd"></span></a></li>
					<li><a data-toggle="tab" href="#buscar" id="tab_buscar"><span class="glyphicon glyphicon-search"></span></a></li>
					<li class="pull-right"><a data-toggle="tab" href="#nuevocliente" id="tab_nuevocliente"><span class="btn-xs glyphicon glyphicon-plus"></span><span class="glyphicon gly2 glyphicon-user"></span></a></li>
					<li class="pull-right"><a data-toggle="tab" href="#nuevoqueso" id="tab_nuevoqueso"><span class="btn-xs glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-hdd"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>