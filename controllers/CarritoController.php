<?php
include_once "./views/CarritoView.php";
include_once"./models/modelo_carrito.php";

	class CarritoController {
		public function actionMostrarCarrito(){

			if	(isset($_SESSION['nombre'])){
			
				if (isset($_SESSION['carrito'])){
					$carritoQuery= new modeloCarrito;
					$carritoMostrar = array();

					foreach ($_SESSION['carrito'] as $idProducto=> $cantidad){

						$auxProducto=$carritoQuery->buscarProductoId($idProducto);
						$carritoMostrar[$idProducto]=$auxProducto[0];
						$carritoMostrar[$idProducto]['cantidad']= $cantidad;
						$carritoMostrar[$idProducto]['subtotal']= $cantidad * $carritoMostrar[$idProducto]['precio'];
					}
					$total =0;
					foreach ($carritoMostrar as $idProducto=> $cart) {
						$total = $total + $carritoMostrar[$idProducto]['subtotal'];
					}
					foreach ($carritoMostrar as $idProducto=> $cart) {
						$carritoMostrar[$idProducto]['total']= $total;
					}

					$view = new CarritoView;
					$cant=$_SESSION;
					$view->render($carritoMostrar);
				}	
				else{
					$carritoMostrar = array();
					$view = new CarritoView;
					$view->render($carritoMostrar);
				}
			}			
		}

		public function agregarProductoCarrito(){
			if	(!isset($_SESSION['nombre']) ){
					// No logueado, mandar a login
			}
			else{
					if (isset($_REQUEST['idProducto'])){
						if (!isset($_SESSION['carrito']) ){
							$_SESSION['carrito'] = array();
						}
						if (!$_SESSION['carrito'][$_REQUEST['idProducto']]) {
						$_SESSION['carrito'][$_REQUEST['idProducto']] = 1;
						}
							else {
								$_SESSION['carrito'][$_REQUEST['idProducto']] = $_SESSION['carrito'][$_REQUEST['idProducto']] + 1;
							}
				}
			}
		}
		
		public function borrarProductoCarrito(){
			if ($_SESSION['carrito'][$_REQUEST['idProducto']]== 1){
				unset($_SESSION['carrito'][$_REQUEST['idProducto']]);
			} 
			else {

			$_SESSION['carrito'][$_REQUEST['idProducto']]= $_SESSION['carrito'][$_REQUEST['idProducto']] -1 ;
			}
		}



		public function agregarCarritoBD($idusuario){

			echo "<script type=\"text/javascript\">alert(\"Gracias por comprar\");</script>";	
			include_once"./models/modelo_carrito.php";
			$modelo_carrito = new modeloCarrito;
				
			if ((isset ($_SESSION['carrito']) )&& (count($_SESSION['carrito'])>0) ){
				$idcarrito=$modelo_carrito->insertar_carrito($idusuario);

				$carritoA= new modeloCarrito;
				foreach ($_SESSION['carrito'] as $idProducto=> $cantidad){ //cantidad contiene true

					$auxProducto=$carritoA->buscarProductoId($idProducto);
			
					$precio=$auxProducto[0]['precio'];
					$modelo_carrito->insertar_productocarrito($idProducto, $idcarrito,$cantidad,$precio, $_SESSION['nombre']);
			}

			$datosMail=$modelo_carrito->load_datos_compra($idcarrito);
				
				include_once "mailController.php";
				$maail= new ControllerMail;
				$maail->enviarMailCompra($datosMail);
				
		}
	}
	
	}
?>