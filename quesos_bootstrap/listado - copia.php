<?php
require('./libs/Smarty.class.php');

//Configuración
$host 	= "localhost";
$db	= "poli";
$user	= "root";
$pass	= "";

//Conexión
try{
	$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe){
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM queso";

//Ejecucion
$q	 = $conn->query($sql);

//Si es null, hubo un error
if(!$q) {
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

$imagenes = $q->fetchAll();
$smarty = new Smarty;
$smarty->assign('galeria', $imagenes);
$smarty->display('listado.tpl');

?>