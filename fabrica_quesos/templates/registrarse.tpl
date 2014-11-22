{include file="header.tpl"}

<section class="container text-center seccion-chica">
<h3>Informaci&oacute;n Personal</h3>
    <form class="form-horizontal" role="form" id="miForm" action="" method="get" onsubmit="validar(this)">
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-earphone"></span>
            {literal}
            <input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            {/literal}
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-globe"></span>
            <input class="form-control" type="text" placeholder="*Direcci&oacute;n" name="direccion" id="direccion">
        </div>

        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
            {literal}
            <input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
           {/literal}
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
            <input class="form-control" type="text" placeholder="*Nombre de Usuario" name="usuario" id="usuario">
        </div>
        <div class="form-group input-group col-lg-12">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
            <input class="form-control" type="text" placeholder="*Contrase&ntilde;a" name="pass" id="pass">
        </div>
        <div class="form-group">
            <span class="help-block">Todos los campos son Obligatorios.</span><br>
            <button class="color btn" type="reset">limpiar</button>
            <button class="color btn" type="submit">registrarme</button>
        </div>
  </form>
</section>

{include file="footer.tpl"}