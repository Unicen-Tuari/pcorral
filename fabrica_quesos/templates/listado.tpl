{include file="header.tpl"}


<section class="container top">

<div class="row">
<div class="col-xs-6 col-md-6">
<div class="row">

	<h2 class="marg"> Productos </h2>
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
<form class="formulario" method="GET" action="">					
	 <button type="submit" name="nombre" value="{$img.nombre}" >
	 	<input hidden="nombre" name="nombre" value="{$img.nombre}">
			<img class="img-responsive" src="{$img.imagen}">
		</button>
</form>				
				</div>
				{/foreach}	
			</div>

			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><p class="indicador">&laquo;</p></a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next"><p class="indicador">&raquo;</p></a>
		</div>
	</div>	
</div>
</div>
<div class="col-xs-6 col-md-6">
	<div class="row">
	<form id="form_consulta" method="GET" action="">	
		<div class="typeahead-container">
            <div class="input-group trasparente">
                <span class="typeahead-query">
                    <input id="q" name="nombre" class="form-control" type="search" placeholder="Buscar" autocomplete="off">
                </span>
                <span class="input-group-btn">
                    <button type="submit" class="btn color">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </div>
	</form>	
</div>

	<div class="row">
	<div id="descripcion_queso"></div>
	</div>
</div>
</div>
</section>

{include file="footer.tpl"}