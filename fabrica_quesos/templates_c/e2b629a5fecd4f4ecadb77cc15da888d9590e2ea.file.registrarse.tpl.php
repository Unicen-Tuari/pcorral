<?php /* Smarty version Smarty-3.1.14, created on 2014-10-20 03:59:39
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109385441be945f34a9-95265069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b629a5fecd4f4ecadb77cc15da888d9590e2ea' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1413770375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109385441be945f34a9-95265069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441be94727e74_28064845',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441be94727e74_28064845')) {function content_5441be94727e74_28064845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section class="container text-center seccion-chica">
<h3>Informaci&oacute;n Personal</h3>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-earphone"></span>
            
            <input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-globe"></span>
            <input class="form-control" type="text" placeholder="*Direcci&oacute;n" name="direccion" id="direccion">
        </div>

        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
            
            <input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
           
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" placeholder="*Nombre de Usuario" name="usuario" id="usuario">
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input class="form-control" type="text" placeholder="*Contrase&ntilde;a" name="pass" id="pass">
        </div>
        <div class="form-group">
            <span class="help-block">Todos los campos son Obligatorios.</span><br>
            <button class="color btn" type="reset">limpiar</button>
            <button class="color btn" type="submit">registrarme</button>
        </div>
  </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>