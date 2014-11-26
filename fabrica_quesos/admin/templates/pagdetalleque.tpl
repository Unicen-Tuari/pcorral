<div class="modal-header">
	<h4 class="modal-title">Detalle del Queso</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_que">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_que" value="{$detalleque.id}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_n" value="{$detalleque.nombre}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Descripcion</span>
			<input class="form-control input-sm" type="text" name="descripcion" value="{$detalleque.descripcion}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Tipo</span>
			<input class="form-control input-sm" type="text" name="tipo" value="{$detalleque.tipo}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Maduracion</span>
			<input class="form-control input-sm" type="text" name="maduracion" value="{$detalleque.maduracion}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Presentacion</span>
			<input class="form-control input-sm" type="text" name="presentacion" value="{$detalleque.presentacion}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Conservacion</span>
			<input class="form-control input-sm" type="text" name="conservacion" value="{$detalleque.conservacion}" readonly>
		</div>

		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="imagen" value="{$detalleque.imagen}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Precio</span>
			<input class="form-control input-sm" type="text" name="precio" value="{$detalleque.precio}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borraque" class="color btn col-lg-3 pull-left">eliminar</button>
			<button type="button" id="boton_modificaque" class="color btn col-lg-3 pull-right">editar</button>
		</div>
	</div>
</form>