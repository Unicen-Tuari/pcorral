<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 23:36:42
         compiled from ".\templates\contacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3224542b226a53fe63-39076405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4758fa0b8fcfba9dab5fb9f573267eecf122bb' => 
    array (
      0 => '.\\templates\\contacto.tpl',
      1 => 1409143028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224542b226a53fe63-39076405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542b226abc3f63_74042039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b226abc3f63_74042039')) {function content_542b226abc3f63_74042039($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
