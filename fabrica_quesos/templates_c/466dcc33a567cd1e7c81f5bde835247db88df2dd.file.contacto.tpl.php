<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 22:16:40
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60735441a5ee2a3592-61593984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '466dcc33a567cd1e7c81f5bde835247db88df2dd' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1413770291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60735441a5ee2a3592-61593984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441a5ee416764_56047103',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441a5ee416764_56047103')) {function content_5441a5ee416764_56047103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container text-center seccion-chica">
	<div class="row" id="alerta_mail">
	</div>
			<form action="" id="form_mail">
				<h3>Formulario de Contacto</h3>
				<div class="form-group input-group col-lg-12">
					<span class="input-group-addon glyphicon glyphicon-user"></span>
					<input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
				</div>
				<div class="form-group input-group col-lg-12">
					<span class="input-group-addon glyphicon glyphicon-envelope"></span>
					
					<input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
					
				</div>
				<div class="form-group input-group col-lg-12">
					<span class="input-group-addon glyphicon glyphicon-earphone"></span>
					
					<input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
					
				</div>
				<div class="form-group input-group col-lg-12">
					<span class="input-group-addon glyphicon glyphicon-comment"></span>
					<textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
				</div>
				<div class="form-group">
					<span class="help-block">Todos los campos son Obligatorios.</span><br>
					<button class="color btn" type="reset">limpiar</button>
					<button class="color btn" type="submit">enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>