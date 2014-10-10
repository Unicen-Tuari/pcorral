<?php
class Controllerindex
{
	private $model;
	private $view;
	private $page;

	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}
	public function imprimirPagina($page)
	{
		$this->view->muestraPagina($page);
	}

		public function imprimirListado($templte)
	{
		$consulta=$this->model->listadoQuesos();
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaDetalle($consulta, $templte);
		}
	}

}
?>