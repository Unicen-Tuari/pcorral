<?php 
	/**
	* 
	*/
	require_once('./libs/PHPMailer/class.phpmailer.php');
	class MailController 
	{
		
		function __construct()
		{
			$this->mail = new PHPMailer(true);
			$this->password = '';
			$this->mail->IsSMTP(); // telling the class to use SMTP
			$this->mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
			$this->mail->SMTPAuth   = true;                  // enable SMTP authentication
			$this->mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$this->mail->Host       = $this->host;      // sets GMAIL as the SMTP server
			$this->mail->Port       = 25;                   // set the SMTP port for the GMAIL server
			$this->mail->Username   = "diego@qwavee.com";  // GMAIL username
			$this->mail->Password   = "Diego221";            // GMAIL password
		}

		private $mail;
		private $host = "qwavee.com";
		private $username = "diego@qwavee.com";
		

		private $password = "galaxypoket";

		public function send($destino,$nombre,$subject,$mensaje){
			try {
				$this->mail->AddAddress($destino, $nombre);
				$this->mail->SetFrom($this->username, 'Fabrica de Quesos');
				//$this->mail->AddReplyTo('name@yourdomain.com', 'First Last');
				$this->mail->Subject = $subject;
				//$this->mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
				$this->mail->MsgHTML($mensaje);
				//$this->mail->AddAttachment('images/phpmailer.gif');      // attachment
				//$this->mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
				$this->mail->Send();
				//echo "Message Sent OK</p>\n";
			} catch (phpmailerException $e) {
			  	//echo $e->errorMessage(); //Pretty error messages from PHPMailer
			  	return false;
			} catch (Exception $e) {
			  	//echo $e->getMessage(); //Boring error messages from anything else!
			  	return false;
			}
			return true;
		}
public function enviar_mail()		
{						//enviar mails
				$mail = new MailController();
				
				
				// cliente listado con todos los productos
				$mensaje = 'mensaje de compra de producto'; //$mailsView->listadoProductos($productosXC);
				$destino = 'policorral@gmail.com';
				$nombre = 'Administrador Fabrica Quesos';
				$subject = 'Pedido de compra';
				$mail->send($destino,$nombre,$subject,$mensaje);
				
				// vendedor

				// admin
				

				return true;
}
	}
 ?>