<?php
require_once('libs/Smarty/Smarty.class.php');
require_once('libs/PHPMailer/class.phpmailer.php');
	include_once './models/model_queso.php';
	include_once './views/view_queso.php';
	include_once './controllers/controller_queso.php';
	include_once "./controllers/CarritoController.php";
	include_once "./controllers/Headernavcontroller.php";
	include_once "./controllers/LoginController.php";
	include_once "./controllers/RegistrarseController.php";
	include_once "./controllers/ProductoController.php";
	
	
	$model = new ModelQueso();
	$view = new ViewQueso();
	$controller = new ControllerQueso($model, $view);
	session_start();
	
	
	
	if (isset($_POST["idProducto"]))
	{
		$controllercart = new CarritoController();
		if(array_key_exists('action', $_REQUEST)) {
			if ($_REQUEST['action'] == 'agregarProductoCarrito'){
				// agregar if not logged in patear a login
				
				$controllercart->agregarProductoCarrito();
			} 
			else if ($_REQUEST['action'] == 'borrarProductoCarrito'){
				// agregar if not logged in patear a login
				$controllercart = new CarritoController();
				$controllercart->borrarProductoCarrito();
			}
		}
		$controllercart->actionMostrarCarrito();
	}
	
	else if (isset($_POST["consulta"]))
		{
			$controller->enviaMail($_POST);
		}
	else if (isset($_GET["quesito"]))
	{
		$controller->imprimirConsulta($_GET["quesito"], 'detalle.tpl');
	}
	else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='mostrar_index')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('index.tpl');
	}
	else if ($_REQUEST['action'] == 'mostrar_historia')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('historia.tpl');
	}
	else if ($_REQUEST['action'] == 'mostrar_mision')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('mision.tpl');
	}
	else if ($_REQUEST['action'] == 'mostrar_valores')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('valores.tpl');
	}
	else if ($_REQUEST['action'] == 'mostrar_ubicacion')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('ubicacion.tpl');
	}
	else if ($_REQUEST['action'] == 'mostrar_contacto')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirPagina('contacto.tpl');
	}
	else if ($_REQUEST['action'] == 'listar_quesos')
	{
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
		$controller->imprimirListado('listado.tpl');
	}
	
	
	else
		if ($_REQUEST['action'] == 'mostrarLogin'){
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();
			$controllerlog = new LoginController();
			$controllerlog->actionmostrarLogin();
		}

		else
		if ($_REQUEST['action'] == 'dataLogin'){
			$controllerlog = new LoginController();
			$controllerlog->actiondataLogin();
	
		}

		else
		if ($_REQUEST['action'] == 'cerrarSession'){
			$_SESSION = [];
			session_destroy();
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();
			$controller->imprimirPagina('index.tpl');
		}

	
		
		else
		if ($_REQUEST['action'] == 'agregarProducto'){
			$headernavcontroller = new HeaderNavController;
			$headernavcontroller->actionmostrarheadernav();
			$controllerprod = new ProductoController();
			$controllerprod->actionAgregarProducto();
		}
		
		else
		if ($_REQUEST['action'] == 'mostrarRegistrarse'){
		$headernavcontroller = new HeaderNavController;
		$headernavcontroller->actionmostrarheadernav();
			$controllerreg = new RegistrarseController();
			$controllerreg->actionMostrarRegistrarse();
		}

		else
		if ($_REQUEST['action'] == 'registrarse'){
			$controllerreg = new RegistrarseController();
			$controllerreg->actionRegistrarse();
		}
		
		
?>