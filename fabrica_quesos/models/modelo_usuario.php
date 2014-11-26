 <?php

include_once "class_db.php";

	class usuario extends database {

		public function load () { //implementada por herencia
		}

		public function buscar_usuario($username){ //Dado un username lo busca
		return $this->query("SELECT u.id
								FROM cliente u
								WHERE u.nombre = '$username';");
		}

		public function buscar_usuario_clave($username, $password){ //corrobora para el login
		return $this->query("SELECT u.id
								FROM cliente u
								WHERE u.username = '$username'
									AND u.password = '$password';");
		}

		public function insertar_usuario($username, $email, $password, $dni, $nombre, $apellido, $direccion, $telefono){ // Agrega usuario

			$arr = array( ':dni' => $dni, 
						':nombre' => $nombre, 
						':apellido' => $apellido,
						':direccion' => $direccion,
						':telefono' => $telefono,
						':email' => $email,
						':username' => $username, 
						':password' => $password
						);

			$stringquery =("INSERT INTO cliente (id, nombre, apellido, direccion, telefono, mail, username , password) VALUES
							(:dni, :nombre, :apellido, :direccion, :telefono, :email, :username , :password);");

		return $this->query($stringquery , $arr);
		}
	}
?>