{include file="header.tpl"}

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

{include file="footer.tpl"}