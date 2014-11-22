<?php
class Modeladmin
{ 
	private $conn;
	
	public function __construct()
	{
		include ('../models/conexion.php');
		try
		{
			$this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		}
		catch(PDOException $pe)
		{
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
	}

	public function consultaClientes()
	{
		$sql = "SELECT * FROM CLIENTE;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaClientesmin()
	{
		$sql = "SELECT id,nombre,apellido FROM CLIENTE ORDER BY apellido,nombre;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetallecli($id_cliente)
	{
		$sql = "SELECT * FROM CLIENTE WHERE id = $id_cliente;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	public function consultaBusquedacli($valor_principal,$valor_secundario,$tipo_busqueda)
	{
		if ($tipo_busqueda == 'na')
		{
			$sql = "SELECT * FROM CLIENTE WHERE (nombre LIKE '$valor_principal') AND (apellido LIKE '$valor_secundario') ORDER BY apellido,nombre ASC;";
		}
		else
		{
			$sql = "SELECT * FROM CLIENTE WHERE (id=$valor_principal) ORDER BY apellido,nombre ASC;";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}



	
	public function consultaQuesos()
	{
		$sql = "SELECT * FROM QUESO;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}
	public function consultaDetalleque($id_queso)
	{
		$sql = "SELECT * FROM QUESO WHERE id = $id_queso;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC);
	}
	

	public function guardaCli($cliente)
	{
		$sql = "INSERT INTO CLIENTE VALUES (NULL,'".$cliente['nombre']."','".$cliente['apellido']."','".$cliente['direccion']."','".$cliente['telefono']."','".$cliente['mail']."');";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		$sql = "SELECT LAST_INSERT_ID();";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC)['LAST_INSERT_ID()'];
	}
	public function updateCli($cliente)
	{
		$sql = "UPDATE CLIENTE SET nombre = '".$cliente['nombre_n']."',apellido = '".$cliente['apellido']."',direccion = '".$cliente['direccion']."',telefono = '".$cliente['telefono']."',mail = '".$cliente['mail']."' WHERE id = ".$cliente['id']."";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -2;
	}
	public function deleteCli($id)
	{
		$sql = "DELETE FROM CLIENTE WHERE id=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -3;
	}

		public function guardaQue($queso)
	{
		$sql = "INSERT INTO QUESO VALUES (NULL,'".$queso['articulo']."','".$queso['descripcion']."','".$queso['tipo']."','".$queso['maduracion']."','".$queso['presentacion']."','".$queso['conservacion']."','".$queso['imagen']."','".$queso['precio']."');";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		$sql = "SELECT LAST_INSERT_ID();";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetch(PDO::FETCH_ASSOC)['LAST_INSERT_ID()'];
	}
	public function updateQue($queso)
	{
		$sql = "UPDATE QUESO SET nombre = '".$queso['nombre_n']."',descripcion = '".$queso['descripcion']."',tipo = '".$queso['tipo']."',maduracion = '".$queso['maduracion']."',presentacion = '".$queso['presentacion']."',conservacion = '".$queso['conservacion']."',imagen = '".$queso['imagen']."',precio = '".$queso['precio']."' WHERE id = ".$queso['id']."";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -2;
	}
	public function deleteQue($id)
	{
		$sql = "DELETE FROM QUESO WHERE id=$id;";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return -3;
	}

		public function consultaBusquedaque($valor_principal,$tipo_busqueda)
	{
		if ($tipo_busqueda == 'articulo')
		{
			$sql = "SELECT * FROM QUESO WHERE upper(queso.nombre) like upper('%$valor_principal%');";
		}
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

}
?>