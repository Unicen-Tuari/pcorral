<?php
include_once "class_db.php";

	class modeloCarrito extends database {
		
		public function load(){

		}

	public function buscarProductoId($idProducto){

		$arr = array(':idProducto' => $idProducto);

		$stringquery =("SELECT id, nombre, precio FROM queso r
						WHERE	(r.id =:idProducto);");

		return $this->query($stringquery , $arr);
		}
	
	public function insertar_carrito($array){

			$arr = array(':id' => $id,
						':idusuario' => $idusuario,
						':importe' => $importe,
							);

			$stringquery =("INSERT INTO compras (id, id_cliente, importe) VALUES
								(:id, :idusuario, :importe);");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}

		public function insertar_productocarrito($idropa, $idcarrito, $cantidad, $precio){

			$arr = array(':idropa'    =>$idropa,
						 ':idcarrito' =>$idcarrito,
						 ':cantidad'  =>$cantidad,
						 ':precio'	  =>$precio
							);

			$stringquery =("INSERT INTO productoscarrito (id_ropa, id_carrito, cantidad, precio) VALUES
								(:idropa, :idcarrito, :cantidad, :precio);");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}


	}
	
?>