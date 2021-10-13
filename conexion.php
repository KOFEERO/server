<?php 



$server = 'localhost';
$user = 'grankof';
$key = 'vanessa79';
$db = 'prueba';


$conexion = new mysqli($server, $user, $key, $db);


if ($conexion->connect_errno) {
	echo "La conexión falló :(" . $conexion->connect_errno;
} else {
	require 'index.wiew.php';
}