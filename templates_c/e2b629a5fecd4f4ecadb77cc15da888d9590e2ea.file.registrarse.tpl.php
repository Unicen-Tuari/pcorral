<?php /* Smarty version Smarty-3.1.14, created on 2014-11-27 05:33:18
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58225476a98eae87b4-00807319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b629a5fecd4f4ecadb77cc15da888d9590e2ea' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1417008338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58225476a98eae87b4-00807319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5476a98ee24a75_37644142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476a98ee24a75_37644142')) {function content_5476a98ee24a75_37644142($_smarty_tpl) {?>
<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container text-center seccion-chica">
<h3>Informaci&oacute;n Personal</h3>
    <form class="form-horizontal" role="form"
        action="index.php?action=registrarse"
        method="POST">
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="nombre">Nombre: </label>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" id="nombre_usuario" name="nombre_usuario" placeholder="*Nombre" required>
        </div>
		<div class="form-group input-group col-lg-12">
            <label class="sr-only" for="nombre">Apellido: </label>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" id="apellido" name="apellido" placeholder="*Apellido" required>
        </div>
		 <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="telefono">Telefono</label>
            <span class="input-group-addon glyphicon glyphicon-earphone"></span>
            
            <input class="form-control" type="number" id="dni" name="dni" placeholder="*DNI" required>
            
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="telefono">Telefono</label>
            <span class="input-group-addon glyphicon glyphicon-earphone"></span>
            
            <input class="form-control" type="tel" id="telefono" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="direccion">Direcci&oacute;n: </label>
            <span class="input-group-addon glyphicon glyphicon-globe"></span>
            <input class="form-control" type="text" placeholder="*Direcci&oacute;n" id="direccion" name="direccion">
        </div>

        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="email">Email</label>
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
            
            <input class="form-control" type="email" id="email" name="email" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
           
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="usuario"> Nombre de Usuario: </label>
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" placeholder="*Nombre de Usuario" id="username" name="username">
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input class="form-control" type="password" placeholder="*Contrase&ntilde;a" id="password" name="password">
        </div>
        <div class="form-group input-group col-lg-12">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input class="form-control" type="password" placeholder="*Repita Contrase&ntilde;a" id="verifpassword" name="verifpassword">
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