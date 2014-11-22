<?php
class ControllerQueso
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


	public function imprimirConsulta($nombre, $template)
	{
		$consulta=$this->model->consultaQuesos($nombre);
		if ($consulta == null)
		{
			return false;
		}
		else
		{
			$this->view->generaDetalle($consulta, $template);
		}
	}
	public function enviaMail($datos)
	{
		$para = 'policorral@gmail.com';
		$asunto = "Consulta de $datos[nombre_apellido]";
		$mensaje = "<!DOCTYPE html><html><head><title>Fabrica de Quesos</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
		$headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
		if(mail($para,$asunto,$mensaje,$headers))
		{
			mail($para,$asunto,$mensaje,$headers);
			$this->view->generaAlerta();
		}
	}
}
?>