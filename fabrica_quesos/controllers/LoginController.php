<?php
	class LoginController {
		public function actionmostrarLogin(){
			include_once "./views/LoginView.php";
			$view = new LoginView;
			$view->render();
		}

		public function actiondataLogin(){
			
			include_once "./models/modelo_usuario.php";
			$usuario =$_REQUEST['username'];
			$password =$_REQUEST['password'];

			$busquedaUsuario = new usuario;
			$resultado = $busquedaUsuario -> buscar_usuario_clave($usuario, $password);
			if ($resultado != null){
				$_SESSION['idusuario'] = $resultado[0]['id'];
				$_SESSION['nombre'] = $usuario;
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();
				include_once "controller_queso.php";
				include_once "./views/view_queso.php";
				include_once "./models/model_queso.php";
				$model = new ModelQueso();
				$view = new ViewQueso();
				$controller = new ControllerQueso($model, $view);
				$controller->imprimirPagina('index.tpl');
			}

			else{
				echo "<script type=\"text/javascript\">alert(\"Usuario o clave erroneos\");</script>";
				
				include_once "./controllers/Headernavcontroller.php";
				$headernavcontroller = new HeaderNavController;
				$headernavcontroller->actionmostrarheadernav();
				$controller = new LoginController();
				$controller->actionmostrarLogin();
			}
		}
	}
?>