<?php
$nombreservidor = "sql437.main-hosting.eu";
$port="3306";
$nombreusuario = "u991668360_domifood";
$contraseña = "Domifood12345";
$nombrebasedatos= "u991668360_Domifood";

// Create connection
$conn = mysqli_connect($nombreservidor, $nombreusuario, $contraseña, $nombrebasedatos, $port);

// Check connection
if (!$conn) {
  die("Connection fallida: " .mysqli_connect_error());
}
  echo("conexion exitosa..!");

?>