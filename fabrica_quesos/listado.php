<?php
	include './models/model_queso.php';
	include './views/view_queso.php';
	include './controllers/controller_queso.php';
	$model = new ModelQueso();
	$view = new ViewQueso();
	$controller = new ControllerQueso($model, $view);
	if (isset($_GET["nombre"]))
	{
		$controller->imprimirConsulta($_GET["nombre"], 'detalle.tpl');
	} 
	else if(! array_key_exists('action', $_REQUEST)||$_REQUEST['action']=='listar_quesos')
	{
		$controller->imprimirListado('listado.tpl');
	} 
	 
?>