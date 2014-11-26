<?php
	class RegistrarseController {
		public function actionMostrarRegistrarse(){
			include "./views/RegistrarseView.php";
			$view = new RegistrarseView;
			$view->render();
		}

		public function actionRegistrarse(){
			include_once "./models/modelo_usuario.php";

			$usuario =$_REQUEST['username'];
			$email =$_REQUEST['email'];
			$password =$_REQUEST['password'];
			$verifpassword=$_REQUEST['verifpassword'];
			$dni =$_REQUEST['dni'];
			$nombre =$_REQUEST['nombre_usuario'];
			$apellido =$_REQUEST['apellido'];
			$direccion =$_REQUEST['direccion'];
			$telefono=$_REQUEST['telefono'];
			$agregar = new usuario;

			if($agregar->buscar_usuario($usuario)== null){
				if ($password == $verifpassword){
					$agregar->insertar_usuario($usuario, $email, $password, $dni, $nombre, $apellido, $direccion, $telefono);
					echo "<script type=\"text/javascript\">alert(\"Registrado exitosamente\");</script>";
					
					include_once "./controllers/Headernavcontroller.php";
					$headernavcontroller = new HeaderNavController;
					$headernavcontroller->actionmostrarheadernav();
					include_once "./controllers/LoginController.php";
					$controller = new LoginController();
					$controller->actionmostrarLogin();
				}
				else{
					//mensaje de error 
					echo "<script type=\"text/javascript\">alert(\"las contraseñas no coinciden\");</script>";
					include_once "./controllers/Headernavcontroller.php";
					$headernavcontroller = new HeaderNavController;
					$headernavcontroller->actionmostrarheadernav();
					$controller2 = new RegistrarseController();
					$controller2->actionMostrarRegistrarse();
				}
			}
			else{
				//mensaje de error
				echo "<script type=\"text/javascript\">alert(\"El nombre de usuario ya existe\");</script>";	
				include_once "./controllers/Headernavcontroller.php";
					$headernavcontroller = new HeaderNavController;
					$headernavcontroller->actionmostrarheadernav();
					$controller2 = new RegistrarseController();
					$controller2->actionMostrarRegistrarse();
			}
		}
	}
?>