<br>
	<h3>Ventas</h3>
	<table class="table table-bordered table-hover">
		
		<thead>
			{foreach $detalleventa as $venta}
			{if $tru}
			{$tru=0}
					<h4 class="text-left margensito">ID {$venta.id}</h4>
					<h4 class="text-left margensito">Cliente {$venta.nombre} {$venta.apellido}</h4>
					
			{/if}
			{/foreach}
		</thead>
		
		<tbody>
			<tr class="active">
				<th class="text-center">articulo</th>
				<th class="text-center">precio unitario</th>
				<th class="text-center">cantidad</th>
			</tr>
		
			{foreach $detalleventa as $prod}
			<tr>
				<td>{$prod.articulo}</td>
				<td>{$prod.precio}</td>
				<td>{$prod.cantidad}</td>
			</tr>
			{/foreach}
		</tbody>
	</table> 
	