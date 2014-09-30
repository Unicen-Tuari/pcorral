{include file="header.tpl"}

<section class="container seccion-chica">
	<h2> PRODUCTOS </h2>
	<div id="contenedor" class="carrusel">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				{foreach $galeria as $img}
				<li data-target="#myCarousel" data-slide-to="{$img.id}"></li>
				{/foreach}
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/salon.jpg">
				</div>	
				{foreach $galeria as $img}
				<div class="item">
				<a href="detalle.php?id={$img.id}">
				<img class="img-responsive" src="{$img.imagen}">
				</a>
				</div>
				{/foreach}	
			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><p class="indicador">&laquo;</p></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"><p class="indicador">&raquo;</p></a>
		</div>
	</div>

</section>

{include file="footer.tpl"}