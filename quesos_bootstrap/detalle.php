<?php
require('./libs/Smarty.class.php');

//Configuración
$host 	= "localhost";
$db	= "poli";
$user	= "root";
$pass	= "";

//TODO: verificar que mensaje este seteado 
$idMensaje = $_GET["id"];

//Conexión
try{
  $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe){
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM queso Where id = :id";

//Ejecucion
$q = $conn->prepare($sql);
$q->execute(array(':id'=>$idMensaje));

//Si es null, hubo un error
if(!$q)
{
  die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
}

$prod = $q->fetchAll();
$smarty = new Smarty;
$smarty->assign('producto', $prod);
$smarty->display('detalle.tpl');

?>