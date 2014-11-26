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
	
	}
?>