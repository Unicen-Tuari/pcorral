<?php
class ControllerMail
{

public function enviaMail($datos)
	{
		$mensaje = "<!DOCTYPE html><html><head><title>Salon de Quesos</title><meta charset='UTF-8'></head><body><ul><li>Nombre y Apellido: $datos[nombre_apellido]</li><br><li>Telefono: $datos[telefono]</li><br><li>Mail: $datos[mail]</li><br><li>Consulta: $datos[consulta]</li><br></ul></body></html>";
		$this-> configure_mail($mensaje, 'consulta Salon de Quesos');
	}
	
	
	public function configure_mail($mensaje, $asunto)
	{
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
		$mail->Subject = $asunto;
		$mail->msgHTML($mensaje, dirname(__FILE__));
		$mail->AltBody = $asunto;
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
			}				
	}
	
	
	public function enviarMailCompra($datos)
	{
		$mensaje = 

					"<table>".	
								"<thead>" .
									"<tr>".
										"<th>".
											"Producto".
										"</th>".
										
										"<th>".
											"Cantidad".
										"</th>".
										"<th>".
											"Precio Unit".
										"</th>".
									"</tr>".
								"</thead>".
							"<tbody>";		
				foreach($datos as 	$datosProducto ){
						$queso  =        $datosProducto['articulo'];

						$cantidad    =        $datosProducto['cantidad'];
						$precio      =        $datosProducto['precio'];
					
					$mensaje = $mensaje."<tr>".
											"<td>".$queso."</td>".
										
											"<td>".$cantidad."</td>".	
					
											"<td>".$precio."</td>".
										"<tr>";
				}

				$mensaje = $mensaje."</tbody>"."</table>";
				$this->configure_mail($mensaje, 'compra Salon de Quesos');
			
		}
	}
?>