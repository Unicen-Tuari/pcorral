<?php /* Smarty version Smarty-3.1.14, created on 2014-09-27 22:52:52
         compiled from ".\templates\registrarse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21357542723a43db226-26334516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b629a5fecd4f4ecadb77cc15da888d9590e2ea' => 
    array (
      0 => '.\\templates\\registrarse.tpl',
      1 => 1411436444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21357542723a43db226-26334516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_542723a4548c29_14288556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542723a4548c29_14288556')) {function content_542723a4548c29_14288556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-chica">
<h4>INFORMACI&Oacute;N PERSONAL</h4>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="nombre">Nombre y Apellido: </label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="telefono">Tel&eacute;fono: </label>
            <input class="form-control" type="number" name="telefono" id="telefono" >
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="direccion">Direcci&oacute;n: </label>
            <input class="form-control" type="text" name="direccion" id="direccion">
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label" for="correo">e-mail: </label>
            <input class="form-control" type="email" name="correo" id="correo" >
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="usuario"> Nombre de Usuario: </label>
            <input class="form-control" type="text" name="usuario" id="usuario">
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="pass">Contrase&ntilde;a: </label>
            <input class="form-control" type="text" name="pass" id="pass">
        </div>
        <button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">registrarme</button>
  </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>