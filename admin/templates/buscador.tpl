<br>
	<div class="seccion-chica">
		<form method="POST" action="" id="form_buscador">
			<div class="form-group col-lg-12 text-right">
				<label class="radio-inline">Seleccione tipo de busqueda:</label>
				<label class="radio-inline">
					<input type="radio" id="check_ventas" onclick="radioBuscave();" name="tipobusqueda" value="venta" checked required>Ventas
				</label>
				<label class="radio-inline">
					<input type="radio" id="check_quesos" onclick="radioBuscaque();" name="tipobusqueda" value="queso" required>Quesos</label>
				<label class="radio-inline">
					<input type="radio" id="check_clientes" onclick="radioBuscacli();" name="tipobusqueda" value="cliente" required>Clientes
				</label>
			</div>
			<div class="form-group col-lg-12 text-left">
				<label class="radio-inline">
					<input type="radio" id="check_id_cliente" name="campobusqueda" value="id_cliente" onclick="busquedaIDcliente();" required>ID
				</label>
			<label class="radio-inline" id="campo_na">
					<input type="radio" id="check_na" name="campobusqueda" value="na" onclick="busquedaNA();" checked required>Nombre
				</label>
				<label class="radio-inline" id="campo_toggle">
					<input type="radio" id="check_id" name="campobusqueda" value="articulo" onclick="busquedaQues();" required>Articulo
				</label>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor" id="input_principal" placeholder="Nombre" autofocus>
			</div>
			<div class="form-group col-lg-12">
				<input class="form-control" type="text" name="valor2" id="input_secundario" placeholder="Apellido">
			</div> 
			<div class="form-group col-lg-12">
				<button class="color btn col-lg-1 col-lg-offset-4" type="reset">limpiar</button>
				<button class="color btn col-lg-1 col-lg-offset-2" type="submit">buscar</button>
			</div>
		</form>
	</div>