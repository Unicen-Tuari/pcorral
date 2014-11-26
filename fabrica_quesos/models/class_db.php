<?php

	//Configuración
	abstract class database {
		private $host 	= "localhost";		// Apache
		private $db		= "poli";				// Nombre de la DB
		private $user 	= "root";			// Nombre del User y la clave
		private $pass	= "";

		protected $conexion = null;

		protected abstract function load();

		protected function connect(){
			$conn = null;
			
			try{
				$conn = new PDO(
					"mysql:host=$this->host;dbname=$this->db",
					$this->user,
					$this->pass
				);
			}
			catch(PDOException $pe){
				die('Error de conexion, Mensaje: ' .$pe->getMessage());
			}
			$this->conexion = $conn;
			return $conn;
		}

		public function connection(){
			if ($this->conexion == null)
				$this->connect();
		return $this->conexion;	
		}
	
		public function query($sql,	$arreglo = false){
			
			$conn = $this->connection();
			$resultado = $conn->prepare($sql);
			
			if ($arreglo==false) {
				$resultado->execute();
			}
			else{
				$resultado->execute($arreglo);	
			}
			
			if(!$resultado){
				die(print($conn->errorInfo()));
			}

			$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		return $data;
		}

	}
?>
