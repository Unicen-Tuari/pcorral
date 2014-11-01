<?php
class Controlleradmin
{
	private $model;
	private $view;
	
	public function __construct($model, $view) 
	{
		$this->model = $model;
		$this->view = $view;
	}
	public function imprimirPagina()
	{
		$this->view->muestraPagina();
	}
	public function imprimirTablacli()
	{
		$this->view->generaTablacli($this->model->consultaClientes());
	}
	public function imprimirTablaque()
	{
		$this->view->generaTablaque($this->model->consultaQuesos());
	}
}
?>