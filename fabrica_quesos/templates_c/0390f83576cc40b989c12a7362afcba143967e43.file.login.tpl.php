<?php /* Smarty version Smarty-3.1.14, created on 2014-10-20 03:59:44
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216565441be910ba9b5-51042079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1413770333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216565441be910ba9b5-51042079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5441be911faf09_46770763',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441be911faf09_46770763')) {function content_5441be911faf09_46770763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section class="container seccion-media">
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Registrados</h3>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="*Usuario" name="usuario" id="usuario">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="*Contrase&ntilde;a" name="pass" id="pass">
        </div>

        <button class="btn btn-default bot centro" type="submit">ingresar</button>
    </form>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Nuevos</h3>
        <p>Al crear una cuenta en nuestra tienda usted podrá avanzar por el proceso de compra m&aacute;s r&aacute;pido, utilizando el carrito de compras.</p>
        <a href="registrarse.php"><button class="btn btn-default bot centro" type="submit">registrarme</button></a>
  </div>
</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>