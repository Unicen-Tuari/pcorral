{include file="header.tpl"}

<section class = "informacion">
	<h1> PRODUCTOS </h1>
		{foreach $galeria as $img}
			<a href="detalle.php?id={$img.id}">
			<img src="{$img.imagen}">
			</a>
		{foreachelse}
			No hay imagenes
		{/foreach}
</section>

{include file="footer.tpl"}