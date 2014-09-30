{include file="header.tpl"}

<div class="container text-center seccion-chica">
	<div class="row" id="alerta_mail">
	</div>
			<form action="" id="form_mail">
				<h3>Formulario de contacto</h3>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="nombre_apellido">Nombre y Apellido</label>
					<span class="input-group-addon glyphicon glyphicon-user"></span>
					<input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="email">Email</label>
					<span class="input-group-addon glyphicon glyphicon-envelope"></span>
					{literal}
					<input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
					{/literal}
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="telefono">Telefono</label>
					<span class="input-group-addon glyphicon glyphicon-earphone"></span>
					{literal}
					<input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
					{/literal}
				</div>
				<div class="form-group input-group col-lg-12">
					<label class="sr-only" for="consulta">Consulta</label>
					<span class="input-group-addon glyphicon glyphicon-comment"></span>
					<textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
				</div>
				<div class="form-group">
					<span class="help-block">Todos los campos son Obligatorios.</span><br>
					<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
					<button class="color btn col-lg-1 col-lg-offset-2 " type="submit">enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>



{include file="footer.tpl"}