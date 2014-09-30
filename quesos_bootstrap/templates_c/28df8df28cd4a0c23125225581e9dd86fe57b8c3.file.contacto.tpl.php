<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 01:11:02
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103255420ad939891c6-87593876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28df8df28cd4a0c23125225581e9dd86fe57b8c3' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1412109895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103255420ad939891c6-87593876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5420ad93e96278_11853412',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420ad93e96278_11853412')) {function content_5420ad93e96278_11853412($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container text-center seccion-chica">
	<div class="row" id="alerta_mail">
	</div>
			<form action="" id="form_mail">
				<h3>Formulario de contacto</h3>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="nombre_apellido">Nombre y Apellido</label>
					<span class="input-group-addon glyphicon glyphicon-user"></span>
					<input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="email">Email</label>
					<span class="input-group-addon glyphicon glyphicon-envelope"></span>
					
					<input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
					
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="telefono">Telefono</label>
					<span class="input-group-addon glyphicon glyphicon-earphone"></span>
					
					<input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
					
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="consulta">Consulta</label>
					<span class="input-group-addon glyphicon glyphicon-comment"></span>
					<textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
				</div>
				<div class="form-group">
					<span class="help-block">Todos los campos son Obligatorios.</span><br>
					<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
					<button class="color btn col-lg-1 col-lg-offset-2 " type="submit">enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
