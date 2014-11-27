<br>
	<h3>Ventas</h3>
		<h4 class="text-left margensito"> Producto {$art} </h4>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Apellido</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Cantidad</th>
			</tr>
		</thead>
		<tbody>
			{foreach $ventas as $venta}
			<tr>
				<td>{$venta.apellido}</td>
				<td>{$venta.nombre}</td>
				<td>{$venta.cantidad}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>