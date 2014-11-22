<br>
<h3>Listado de Productos</h3>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Descripcion</th>
				<th class="text-center">Tipo</th>
				<th class="text-center">Maduracion</th>
				<th class="text-center">Presentacion</th>
				<th class="text-center">Conservacion</th>
				<th class="text-center">Precio</th>
			</tr>
		</thead>
		<tbody>
			{foreach $quesos as $queso}
			<tr>
				<td>{$queso.id}</td>
				<td>{$queso.nombre}</td>
				<td>{$queso.descripcion}</td>
				<td>{$queso.tipo}</td>
				<td>{$queso.maduracion}</td>
				<td>{$queso.presentacion}</td>
				<td>{$queso.conservacion}</td>
				<td>{$queso.precio}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>