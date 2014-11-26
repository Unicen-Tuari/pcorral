

{foreach $nombre_queso as $queso}
	<div class="row">
		<div class="col-xs-8 col-md-8">
			<h2> {$queso.nombre} </h2>
		</div>
	</div>
	<div class="row">
		<div id="comprar_prod" class="col-xs-8 col-md-8">
			<p>{$queso.descripcion}</p>
			<ul>
				<li>Maduraci&oacute;n: {$queso.maduracion} d&iacute;as</li>
				<li>Presentaci&oacute;n: Horma {$queso.presentacion} kg.</li>
				<li>Conservaci&oacute;n: {$queso.conservacion} &deg;.</li>
			</ul>
			<button id="comprar_producto" class="btn btn-default bot" value="Comprar" onclick="clickComprar({$queso.id})">comprar</button>
		</div>
		<div class="col-xs-4 col-md-4">
			<img class="img-responsive" src="{$queso.imagen}">
		</div>
	</div>

{/foreach}
