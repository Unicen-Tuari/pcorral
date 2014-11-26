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
		$mensaje = "<!DOCTYPE html><html><head><title>Salon de Quesos</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
		date_default_timezone_set('Etc/UTC');
		require './libs/PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Debugoutput = 'error_log';
		$mail->Host = 'qwavee.com';
		$mail->Port = 25;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "diego@qwavee.com";
		$mail->Password = "Diego221";
		$mail->setFrom('policorral@gmail.com', 'Administrador Salon de Quesos');
		$mail->addReplyTo('paucorral@hotmail.com.ar', 'Administrador Salon de Quesos');
		$mail->addAddress('policorral@gmail.com', 'Administrador Salon de Quesos');
		$mail->Subject = 'Consulta de quesos';
		$mail->msgHTML($mensaje, dirname(__FILE__));
		$mail->AltBody = 'consulta Salon de Quesos';
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "<script type=\"text/javascript\">alert(\"Mensaje enviado\");</script>";
				}				
	}
}
?>