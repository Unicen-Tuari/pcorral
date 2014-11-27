<?php
include_once "class_db.php";

	class modeloCarrito extends database {
		
	private $conn;
		public function load(){

		}

	public function buscarProductoId($idProducto){

		$arr = array(':idProducto' => $idProducto);

		$stringquery =("SELECT id, nombre, precio FROM queso r
						WHERE	(r.id =:idProducto);");

		return $this->query($stringquery , $arr);
		}
	
	public function insertar_carrito($idusuario){

			$arr = array(':idusuario' => $idusuario
							);

			$stringquery =("INSERT INTO compras (id_cliente) VALUES
								(:idusuario);");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}

		public function insertar_productocarrito($idqueso, $idcarrito, $cantidad, $precio, $nombre){

			$arr = array(':idqueso'    =>$idqueso,
						 ':idcarrito' =>$idcarrito,
						 ':cantidad'  =>$cantidad,
						 ':precio'	  =>$precio,
						 ':nombre' => $nombre
							);

			$stringquery =("INSERT INTO factura (id_queso, id_compra, precio, cantidad) VALUES
								(:idqueso, :idcarrito, :precio,  :cantidad);
							insert into prod_cliente (id_queso, id_cliente, cantidad) values
								(:idqueso, :nombre, :cantidad)");

			return $this-> insert_retornaUltimaId($stringquery , $arr);

		}


		
public function load_datos_compra($idcarrito){
			$arr = array(':idcarrito' => $idcarrito);

			$stringquery =("SELECT cli.nombre, cli.apellido, fa.precio, fa.cantidad, q.nombre as articulo
							from compras co
							join cliente cli on (cli.id = co.id_cliente)
							join factura fa on (fa.id_compra = co.id)
							join queso q on (q.id = fa.id_queso)
	       					WHERE (co.id = :idcarrito);");

		return $this->query($stringquery , $arr);
		}

	}
	
?>