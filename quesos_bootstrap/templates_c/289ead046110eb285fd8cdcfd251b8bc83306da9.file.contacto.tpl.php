<?php /* Smarty version Smarty-3.1.19, created on 2014-08-27 15:51:35
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1613653fd09869555e5-15907616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '289ead046110eb285fd8cdcfd251b8bc83306da9' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1409143028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613653fd09869555e5-15907616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fd0986b51361_76342019',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fd0986b51361_76342019')) {function content_53fd0986b51361_76342019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript" SRC=js/queso.js> </script>

<section class = "contacto">
    <form id="miForm" action="" method="get" onsubmit="validar(this)">
        <h1>CONTACTO</h1>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" >
        <label for="telefono">Tel&eacute;fono: </label>
        <input type="number" name="telefono" id="telefono" >
        <label for="correo">e-mail: </label>
        <input type="email" name="correo" id="correo" >
        <label for="mensaje">Mensaje: </label>
        <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje"></textarea>
        <input type="submit" value="enviar" onsubmit="return validar(this);">
    </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
