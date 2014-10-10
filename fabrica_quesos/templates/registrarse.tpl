{include file="header.tpl"}

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

{include file="footer.tpl"}