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

	public function imprimirBuscador()
	{
		$this->view->generaBuscador();
	}
	public function imprimirFormcli()
	{
		$this->view->generaFormcli();
	}
	public function imprimirDetallecli($id_cliente)
	{
		$this->view->generaDetallecli($this->model->consultaDetallecli($id_cliente));
	}

	public function imprimirFormque()
	{
		$this->view->generaFormque();
	}
	public function imprimirDetalleque($id_queso)
	{
		$this->view->generaDetalleque($this->model->consultaDetalleque($id_queso));
	}

	public function imprimirBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($valor_principal == null)
		{
			$valor_principal = '%';
		}
		if ($valor_secundario == null)
		{
			$valor_secundario = '%';
		}
		$consulta=$this->model->consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaBusquedacli($consulta);
		}
	}
	public function insertaCli($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->guardaCli($arreglo));
	}
	public function actualizaCli($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->updateCli($arreglo));
	}
	public function borrarCli($id)
	{
		$this->view->generaAlerta($this->model->deleteCli($id));
	}
		public function insertaQue($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->guardaQue($arreglo));
	}
	public function actualizaQue($arreglo)
	{
		foreach ($arreglo as $valor)
		{
			$valor = trim($valor);
		}
		$this->view->generaAlerta($this->model->updateQue($arreglo));
	}
	public function borrarQue($id)
	{
		$this->view->generaAlerta($this->model->deleteQue($id));
	}

}
?>