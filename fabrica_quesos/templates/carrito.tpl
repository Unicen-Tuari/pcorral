
<section class="container">
<form id ="comprar" >	
	<h2> Carrito de Compras </h2>
	
	<div class="modal-body tt">
	<div class="row fila">
		<div class="col-xs-5 col-md-5">
			<h4> Producto </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Cant. </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Precio </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Importe </h4>
		</div>
	</div>

{foreach $arrProductos as $datosProductos}
	<div class="row lista">
	<div class="col-xs-5 col-md-5">
			<p> {$datosProductos.nombre} </p>		
	</div>
		<div class="col-xs-2 col-md-2">
			<p>{$datosProductos.cantidad}</p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $ {$datosProductos.precio} </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $ {$datosProductos.subtotal} </p>
		</div>
		<div class="col-xs-1 col-md-1">
			<button value="Borrar" onclick="clickBorrar({$datosProductos.id})"><span class="glyphicon glyphicon-trash"></span></button>	
		</div>
	</div>

{/foreach}	
	<div class="row fila">
		<div class="col-xs-9 col-md-9">
			<h4>Total</h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4>$ {$datosProductos.total}</h4>
		</div>
	</div>

</div>
<input type = "submit" class="btn btn-default bot" value="Comprar"/>
	
</form>
</section>
