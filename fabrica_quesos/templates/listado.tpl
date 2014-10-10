{include file="header.tpl"}
<section class="container">
<div class="row">
<div class="col-xs-6 col-md-6">
	<h2> PRODUCTOS </h2>
	<div id="contenedor" class="carrusel">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				{foreach $nombre_queso as $img}
				<li data-target="#myCarousel" data-slide-to="{$img.id}"></li>
				{/foreach}
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/salon.jpg">
				</div>	
				{foreach $nombre_queso as $img}
				<div class="item">
				<img class="img-responsive" src="{$img.imagen}">
				</a>
				</form>
				</div>
				{/foreach}	
			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><p class="indicador">&laquo;</p></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"><p class="indicador">&raquo;</p></a>
		</div>
	</div>
	</div>
	<div class="col-lg-6" id="descripcion_queso"></div>
	

</div>
</section>

{include file="footer.tpl"}