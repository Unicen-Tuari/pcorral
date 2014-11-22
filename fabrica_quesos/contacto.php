<?php
	include './models/model_queso.php';
	include './views/view_queso.php';
	include './controllers/controller_queso.php';
	$model = new ModelQueso();
	$view = new ViewQueso();
	$controller = new ControllerQueso($model, $view);
	if (isset($_POST["consulta"]))
	{
		$controller->enviaMail($_POST);
	} else {
		$controller->imprimirPagina('contacto.tpl');
		}
?>
