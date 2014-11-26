
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

{include file="footer.tpl"}