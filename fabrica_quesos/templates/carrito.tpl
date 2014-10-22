{include file="header.tpl"}

<section class="container seccion-media">
	<h2> Carrito de Compras </h2>
	<div class="row fila">
		<div class="col-xs-5 col-md-5">
			<h4> Producto </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Cantidad </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Precio </h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4> Subtotal </h4>
		</div>
	</div>

	<div class="row lista">
		<div class="col-xs-5 col-md-5">
			<p> Parmesano </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			</select>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $200 </p>
		</div>
		<div class="col-xs-2 col-md-2">
			<p> $200 </p>
		</div>
		<div class="col-xs-1 col-md-1">
			<button><span class="glyphicon glyphicon-trash"></span></button>
		</div>
	</div>
	<div class="row fila">
		<div class="col-xs-9 col-md-9">
			<h4>Total</h4>
		</div>
		<div class="col-xs-2 col-md-2">
			<h4>$200</h4>
		</div>
	</div>
	<button type="submit" class="btn btn-default bot">comprar</button>

</section>

{include file="footer.tpl"}