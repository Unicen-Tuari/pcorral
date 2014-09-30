<?php /* Smarty version Smarty-3.1.19, created on 2014-09-21 04:56:55
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13484541c756e86bfd5-19729105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f107aa99c28b6d81a2701af38c3166148832399' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1411267342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13484541c756e86bfd5-19729105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c756ea02438_76026055',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c756ea02438_76026055')) {function content_541c756ea02438_76026055($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-chica">
    <h2>CONTACTO</h2>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="nombre">Nombre: </label>
            <input class="form-control" type="text" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="telefono">Tel&eacute;fono: </label>
            <input class="form-control" type="number" name="telefono" id="telefono" >
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="correo">e-mail: </label>
            <input class="form-control" type="email" name="correo" id="correo" >
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="mensaje">Mensaje: </label>
            <textarea class="form-control" rows="6" id="mensaje" name="mensaje" placeholder="Escriba su mensaje"></textarea>
        </div>
        <button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">enviar</button>
    </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
