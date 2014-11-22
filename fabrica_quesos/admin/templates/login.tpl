{include file="header.tpl"}

<script type="text/javascript" SRC=js/queso.js> </script>

<section class="container seccion-media">
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Registrados</h3>
    <form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
        <div class="form-group">
            <label class="sr-only" for="usuario">Usuario: </label>
            <input type="text" name="username" placeholder="*Usuario" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Contrase&ntilde;a: </label>
            <input type="password" name="password" placeholder="*Contraseña" class="form-control" required>
        </div>

        <button class="color btn btn-default bot centro" type="submit">ingresar</button>
    </form>
</div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
    <h3>Clientes Nuevos</h3>
        <p>Al crear una cuenta en nuestra tienda usted podrá avanzar por el proceso de compra m&aacute;s r&aacute;pido, utilizando el carrito de compras.</p>
        <a href="registrarse.php"><button class="color btn btn-default bot centro" type="submit" onclick="return validar(this);">registrarme</button></a>
  </div>
</div>
</section>

{include file="footer.tpl"}