<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 06:30:40
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5931547565806c4aa6-25305338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1416777559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5931547565806c4aa6-25305338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547565807d2360_29174883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547565807d2360_29174883')) {function content_547565807d2360_29174883($_smarty_tpl) {?>
<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-chica">
    <h3>Clientes Registrados</h3>
    <form class="form-horizontal" role="form" 
        action="index.php?action=dataLogin"
        method="POST">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario: </label>
            <input class="form-control" type="text" placeholder="*Usuario" name="username" id="username" autofocus>
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <input class="form-control" name="password" type="password" placeholder="*Contrase&ntilde;a" id="pass">
        </div>

        <button class="btn btn-default bot centro" type="submit">ingresar</button>
    </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>