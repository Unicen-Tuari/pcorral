<?php /* Smarty version Smarty-3.1.14, created on 2014-10-18 03:12:52
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109385441be945f34a9-95265069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b629a5fecd4f4ecadb77cc15da888d9590e2ea' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1412472738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109385441be945f34a9-95265069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441be94727e74_28064845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441be94727e74_28064845')) {function content_5441be94727e74_28064845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container text-center seccion-chica">
<h3>Informaci&oacute;n Personal</h3>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="nombre">Nombre y Apellido: </label>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="telefono">Telefono</label>
            <span class="input-group-addon glyphicon glyphicon-earphone"></span>
            
            <input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="direccion">Direcci&oacute;n: </label>
            <span class="input-group-addon glyphicon glyphicon-globe"></span>
            <input class="form-control" type="text" placeholder="*Direcci&oacute;n" name="direccion" id="direccion">
        </div>

        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="email">Email</label>
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
            
            <input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
           
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="usuario"> Nombre de Usuario: </label>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" placeholder="*Nombre de Usuario" name="usuario" id="usuario">
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input class="form-control" type="text" placeholder="*Contrase&ntilde;a" name="pass" id="pass">
        </div>
        <div class="form-group">
            <span class="help-block">Todos los campos son Obligatorios.</span><br>
            <button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
            <button class="color btn col-lg-1 col-lg-offset-2 " type="submit">registrarme</button>
        </div>
  </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>