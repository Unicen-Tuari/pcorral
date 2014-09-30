<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 03:39:20
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302585420c943a51b36-97095212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7770bd87fb13a7fcba9e0d4754a41025ddc13f59' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1411436359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302585420c943a51b36-97095212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5420c943c8c0b6_24454909',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5420c943c8c0b6_24454909')) {function content_5420c943c8c0b6_24454909($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-media">
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h4>CLIENTES REGISTRADOS</h4>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="usuario">Usuario: </label>
            <input class="form-control" type="text" name="usuario" id="usuario">
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="pass">Contrase&ntilde;a: </label>
            <input class="form-control" type="text" name="pass" id="pass">
        </div>

        <button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">ingresar</button>
    </form>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h4>CLIENTES NUEVOS</h4>
        <p>Al crear una cuenta en nuestra tienda usted podrá avanzar por el proceso de compra m&aacute;s r&aacute;pido, utilizando el carrito de compras.</p>
        <a href="registrarse.php"><button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">registrarme</button></a>
  </div>
</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
