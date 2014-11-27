<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 23:54:33
         compiled from ".\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166555475157e988805-70339862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166555475157e988805-70339862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475157ec26d04_15011646',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475157ec26d04_15011646')) {function content_5475157ec26d04_15011646($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
					<li class="pull-right"><a data-toggle="tab" href="#nuevoventa" id="tab_nuevoventa"><span class="btn-xs glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
					<li class="pull-right"><a data-toggle="tab" href="#eliminarventa" id="tab_eliminarventa"><span class="btn-xs glyphicon glyphicon-minus"></span><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-12">
				<div class="tab-content">
					<div class="tab-pane fade" id="tablaclientes"></div>
					<div class="tab-pane fade" id="nuevocliente"></div>
					<div class="tab-pane fade" id="buscar"></div>
					<div class="tab-pane fade" id="tablaquesos"></div>
					<div class="tab-pane fade" id="nuevoqueso"></div>
					<div class="tab-pane fade" id="nuevoventa"></div>
					<div class="tab-pane fade" id="eliminarventa"></div>
					<div class="tab-pane fade" id="tablaventas"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_emergente">
		<div class="modal-dialog">
			<div class="modal-content" id="modal_body">
			</div>
		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>