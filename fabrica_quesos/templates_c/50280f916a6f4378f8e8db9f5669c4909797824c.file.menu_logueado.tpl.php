<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:30:30
         compiled from ".\templates\menu_logueado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3099154756576449954-09563476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50280f916a6f4378f8e8db9f5669c4909797824c' => 
    array (
      0 => '.\\templates\\menu_logueado.tpl',
      1 => 1416875098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099154756576449954-09563476',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54756576451651_55206861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54756576451651_55206861')) {function content_54756576451651_55206861($_smarty_tpl) {?><ul  class="dropdown-menu">
					
	<li id="modal_carrito"><a id="m_carrito"><span class="txtnav" >Mi carrito &nbsp</span>
	<span class="glyphicon glyphicon-shopping_cart"></span>  </a></li>

	<!-- CAMBIAR CONTRASEÑA

	<li><a href="index.php?action=cerrarSession"><span class="txtnav" >Cambiar Contraseña &nbsp </span>
	<span class="glyphicon glyphicon-circle_exclamation_mark"></span> </a></li> 

	-->
	
	<li><a href="index.php?action=cerrarSession"><span class="txtnav" >Cerrar Session &nbsp </span>
	<span class="glyphicon glyphicon-Remove"></span> </a></li>

</ul><?php }} ?>