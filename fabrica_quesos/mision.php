<?php
	include './models/model_index.php';
	include './views/view_index.php';
	include './controllers/controller_index.php';
	$model = new Modelindex();
	$view = new Viewindex();
	$controller = new Controllerindex($model, $view);
	$controller->imprimirPagina('mision.tpl');
?>