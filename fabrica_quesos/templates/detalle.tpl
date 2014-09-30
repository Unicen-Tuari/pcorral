{include file="header.tpl"}

<section class = "contacto">

{foreach $producto as $queso}
	<h1> {$queso.nombre} </h1>
	<p>{$queso.descripcion}</p>
	<img src="{$queso.imagen}">
	<ul id='listDePropiedades'>
		<li>Maduraci&oacute;n: {$queso.maduracion} d&iacute;as</li>
		<li>Presentaci&oacute;n: Horma {$queso.presentacion} kg.</li>
		<li>Conservaci&oacute;n: {$queso.conservacion} &deg;.</li>
	</ul>
{/foreach}


</section>

{include file="footer.tpl"}