<br>
	<h3>Ventas</h3>
	<h4 class="text-left margensito"> Cliente {$nomb} {$apell} </h4>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Articulo</th>
				<th class="text-center">Cantidad</th>
			</tr>
		</thead>
		<tbody>
			{foreach $ventas as $venta}
			<tr>
				<td>{$venta.nombre}</td>
				<td>{$venta.cantidad}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>