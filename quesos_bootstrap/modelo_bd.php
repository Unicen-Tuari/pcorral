<?php

class ModelosDB {
	private $user = 'root';    //Configuración
	private $pass = '';
	private $host = 'localhost';
	private $db = 'poli';
	protected $conn = null;

	protected function connect(){    //Conexión
		$conn = null;
		try{
			$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
			}
			
		catch(PDOException $pe){
		die('Error de conexion, Mensaje: ' .$pe->getMessage());
			}

}


}


?>