{include file="header.tpl"}

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

{include file="footer.tpl"}