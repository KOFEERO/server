<?php 



$server = '18.222.145.178';
$user = 'grankof';
$key = 'vanessa79';
$db = 'prueba';


$conexion = new mysqli($server, $user, $key, $db);


if ($conexion->connect_errno) {
	echo "La conexión falló :(";
} else {
	echo "La conexión se realizó correctamente :)";
}