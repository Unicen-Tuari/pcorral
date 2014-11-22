<?php /* Smarty version Smarty-3.1.14, created on 2014-10-15 01:15:20
         compiled from ".\templates\buscador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21275439c940d9d085-00958933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b60cfc658cff124c81ffc43188cdf6be98b5fd' => 
    array (
      0 => '.\\templates\\buscador.tpl',
      1 => 1413328513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21275439c940d9d085-00958933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439c941075df9_65203181',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439c941075df9_65203181')) {function content_5439c941075df9_65203181($_smarty_tpl) {?><br>
	<div class="seccion-chica">
		<form method="POST" action="" id="form_buscador">
			<div class="form-group col-lg-12 text-right">
				<label class="radio-inline">Seleccione tipo de busqueda:</label>
				<label class="radio-inline">
					<input type="radio" id="check_quesos" onclick="radioBuscaque();" name="tipobusqueda" value="queso" checked required>Queso
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_clientes" onclick="radioBuscacli();" name="tipobusqueda" value="cliente" required>Cliente
				</label>
			</div>
			<div class="form-group col-lg-12 text-left">
				<label class="radio-inline">
					<input type="radio" id="check_na" name="campobusqueda" value="na" onclick="busquedaNA();" checked required>Nombre
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_id_cliente" name="campobusqueda" value="id_cliente" onclick="busquedaIDcliente();" required>ID Cliente
				</label>
				<label class="radio-inline" id="campo_toggle">
					<input type="radio" id="check_id" name="campobusqueda" value="articulo" onclick="busquedaQues();" required>Articulo
				</label>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor" id="input_principal" placeholder="Nombre" autofocus>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor2" id="input_secundario" placeholder="Apellido">
			</div> 
			<div class="form-group col-lg-12">
				<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
				<button class="color btn col-lg-1 col-lg-offset-2" type="submit">buscar</button>
			</div>
		</form>
	</div><?php }} ?>