<?php
	include './models/model_admin.php';
	include './views/view_admin.php';
	include './controllers/controller_admin.php';
	$model = new Modeladmin();
	$view = new Viewadmin();
	$controller = new Controlleradmin($model, $view);
	session_start();

	if (isset($_POST["que"]))
	{
		$controller->imprimirTablaque();
	}
	else if (isset($_POST["cli"]))
	{
		$controller->imprimirTablacli();
	}
	else if (isset($_POST["buscar"]))
	{
		$controller->imprimirBuscador();
	}
	else if (isset($_POST["nuevoque"]))
	{
		$controller->imprimirFormque();
	}
		else if (isset($_POST["elimve"]))
	{
		$controller->imprimirFormeliminarventa();
	}
	else if (isset($_POST["nuevove"]))
	{
		$controller->imprimirFormve();
	}
	else if (isset($_POST["nuevocli"]))
	{
		$controller->imprimirFormcli();
	}
	else if (isset($_POST["id_queso"]))
	{
		$controller->imprimirDetalleque($_POST["id_queso"]);
	}
	
	else if (isset($_POST["id_cliente"]))
	{
		$controller->imprimirDetallecli($_POST["id_cliente"]);
	}
	else if (isset($_POST["tipobusqueda"]))
	{
		if ($_POST["tipobusqueda"] == 'queso')
		{
			if (isset($_POST["campobusqueda"]))
			{
				$controller->imprimirBusquedaque($_POST["valor"],$_POST["valor2"],$_POST["campobusqueda"]);
			}
		}
		else if ($_POST["tipobusqueda"] == 'cliente')
		{
			if (isset($_POST["campobusqueda"]))
			{
				$controller->imprimirBusquedacli($_POST["valor"],$_POST["valor2"],$_POST["campobusqueda"]);
			}
		}
		else
		{
			if (isset($_POST["campobusqueda"]))
			{
				$controller->imprimirBusquedave($_POST["valor"],$_POST["valor2"],$_POST["campobusqueda"]);
			}
		}
	}
	else if (isset($_POST["nombre"]))
	{
		$controller->insertaCli($_POST);
	}
	else if (isset($_POST["id_ventaaa"]))
	{
		$controller->eliminarventa($_POST["id_ventaaa"]);
	}
		else if (isset($_POST["id_clientev"]))
	{
		$controller->insertaVe($_POST);
	}
	else if (isset($_POST["id"]))
	{
		$controller->actualizaCli($_POST);
	}
	else if (isset($_POST["id_que"]))
	{
		$controller->actualizaQue($_POST);
	}
	else if (isset($_POST["id_delcli"]))
	{
		$controller->borrarCli($_POST["id_delcli"]);
	}
	else if (isset($_POST["id_delque"]))
	{
		$controller->borrarQue($_POST["id_delque"]);
	}
	else if (isset($_POST["articulo"]))
	{
		$controller->insertaQue($_POST);
	}
	else if (isset($_SESSION["username"]))
	{
		$controller->imprimirPagina();
	}
?>