{include file="header.tpl"}

<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-media">
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Registrados</h3>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario: </label>
            <input class="form-control" type="text" placeholder="*Usuario" name="usuario" id="usuario">
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <input class="form-control" type="text" placeholder="*Contrase&ntilde;a" name="pass" id="pass">
        </div>

        <button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">ingresar</button>
    </form>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Nuevos</h3>
        <p>Al crear una cuenta en nuestra tienda usted podrá avanzar por el proceso de compra m&aacute;s r&aacute;pido, utilizando el carrito de compras.</p>
        <a href="registrarse.php"><button class="btn btn-default bot centro" type="submit" onclick="return validar(this);">registrarme</button></a>
  </div>
</div>
</section>

{include file="footer.tpl"}