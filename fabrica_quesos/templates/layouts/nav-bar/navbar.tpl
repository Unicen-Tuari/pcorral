<div id = "content-navbartrastos">
<nav class="navbar-inverse navbar-default navbar-trastos" role="navigation" id= "navbar-trastos">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.php?action=home">
			<img src="img/trastos2.png" class="img-responsive img-trastos">
		</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li ><a href="index.php?action=home" name = "home">Home</a></li>
			<li><a href="#"></a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search" id="buscador" method="get">
			<div class="form-group">
				<input type="hidden" name = "action" value = "buscar"/>
				<input type="text" class="form-control" placeholder="Buscar" id="buscar_txt" name = "buscar_txt" 
					{if isset($txt_buscar)} value="{$txt_buscar}" {/if}>
			</div>
			<button type="submit" class="btn btn-default">Go</button>
		</form>

		{include file="$pathUser/navbar-actions-right.tpl"}

		
	</div><!-- /.navbar-collapse -->
</nav>
</div>