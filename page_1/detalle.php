<?php

//Configuración
$host 	= "localhost";
$db	= "poli";
$user	= "root";
$pass	= "";

//TODO: verificar que mensaje este seteado 
$idMensaje = $_GET["mensaje"];

//Conexión
try{
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' .$pe->getMessage());
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Quesos &quot;NELLY&quot; </title>
    <link rel="stylesheet" type="text/css" href="muzza.css"/>
  </head>

  <body>
    <header>
    </header>

    <nav>
      <ul id="menu">  
        <li><a href="inicio.html">Inicio</a></li>
        <li><a href="listado.php">Productos</a></li>
        <li><a href="historia.html">Historia</a></li>
        <li><a href="mision.html">Misi&oacute;n</a></li>
        <li><a href="valores.html">Valores</a></li>
        <li><a href="ubicacion.html">Ubicaci&oacute;n</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul> 
      </nav>

    <section class = "contacto">
<?php
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

//Si todo salió bien imprimo todos los registros.
while($r = $q->fetch()){
  //print_r($r);
	  echo "<h1>";
	  echo $r["nombre"];
	  echo "</h1>";
	  echo "<p>";
	  echo $r["descripcion"];
	  echo "</p>";
    echo "<img src=" .$r["imagen"].">";  
    echo "<ul id='listDePropiedades'>"; 
    echo "<li>Maduraci&oacute;n: " . $r["maduracion"] ." d&iacute;as.</li>";
    echo "<li>Presentaci&oacute;n: Horma " . $r["presentacion"] . " kg.</li>";
    echo "<li>Conservaci&oacute;n: " . $r["conservacion"] . " &deg;.</li>";
    echo "</ul>";
  }
?>
    </section>

    <footer>
      <p>
        Lopez y Planes 50, Pehuaj&oacute;, Pcia. Buenos Aires, Argentina. e-mail quesosnelly@gmail.com
      </p>
    </footer>
  </body>
</html>