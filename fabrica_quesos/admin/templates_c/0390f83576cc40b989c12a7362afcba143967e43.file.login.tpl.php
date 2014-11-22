<?php /* Smarty version Smarty-3.1.14, created on 2014-10-18 03:40:29
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205995439400b6b1ac9-35782997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1413596422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205995439400b6b1ac9-35782997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5439400b7ced88_80316452',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5439400b7ced88_80316452')) {function content_5439400b7ced88_80316452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-media">
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Registrados</h3>
    <form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario: </label>
            <input type="text" name="username" placeholder="*Usuario" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <input type="password" name="password" placeholder="*Contraseña" class="form-control" required>
        </div>

        <button class="color btn btn-default bot centro" type="submit">ingresar</button>
    </form>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Nuevos</h3>
        <p>Al crear una cuenta en nuestra tienda usted podrá avanzar por el proceso de compra m&aacute;s r&aacute;pido, utilizando el carrito de compras.</p>
        <a href="registrarse.php"><button class="color btn btn-default bot centro" type="submit" onclick="return validar(this);">registrarme</button></a>
  </div>
</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>