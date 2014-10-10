{foreach $nombre_queso as $queso}
	<div class="row">
		<div class="col-xs-8 col-md-8">
			<h2> {$queso.nombre} </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 col-md-8">
			<p>{$queso.descripcion}</p>
			<ul>
				<li>Maduraci&oacute;n: {$queso.maduracion} d&iacute;as</li>
				<li>Presentaci&oacute;n: Horma {$queso.presentacion} kg.</li>
				<li>Conservaci&oacute;n: {$queso.conservacion} &deg;.</li>
			</ul>
			<button type="submit" class="btn btn-default bot" onclick="location.href='carrito.php'">comprar</button>
		</div>
		<div class="col-xs-4 col-md-4">
			<img class="img-responsive" src="{$queso.imagen}">
		</div>
	</div>

{/foreach}
