<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Sal&oacute;n de Quesos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/queso.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="css/jquery.typeahead.css">
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="./js/jquery.typeahead.js"></script>
	</head>

	<body>
		<header>
			<div class="row portada">
				<div class="col-xs-9 col-md-9">
					<img class="img-responsive" src="images/nav.png">
				</div>	
			
			
				<div class="col-xs-3 col-md-3">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
		    
			
			</div>
				</div>	
				</div>	
			
			
			
			
		</header>

		<nav class="navbar navbar-default">
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_index">Inicio</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=listar_quesos">Productos</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_historia">Historia</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_mision">Misi&oacute;n</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_valores">Valores</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_ubicacion">Ubicaci&oacute;n</a>
			<a class="navbar-brand" id="link_info" href="index.php?action=mostrar_contacto">Contacto</a>
<ul class="nav navbar-nav navbar-right">

		      <li class="hide"><a href="#"><span class="txtnav">Mis Compras &nbsp </span> <span class="glyphicon glyphicon-shopping-cart"></span> </a></li>
				<li class="dropdown">
				<a  class="dropdown-toggle" data-toggle="dropdown">
				<span class="txtnav">{$nombreUsuario} </span> <b class="caret"></b> </a>

				{if ($nombreUsuario == "Loguearse / Registrarse")}
						{include file="menu_no_logueado.tpl" title=foo }
					{else}
						{include file="menu_logueado.tpl" title=foo }
				{/if}
				</li>

			</ul>
			</nav>

	
	<div id= "mostrar_info"></div>