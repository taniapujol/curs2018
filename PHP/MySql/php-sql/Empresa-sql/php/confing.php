<?php // Conectamos con el servidor y la base de datos
$host = "localhost";
$user = "root";
$bd = "empresa";
$pass = "tania1979";
// array asociativa para la conneccion
$cfg = array(
    "host" => $host,
    "user" => $user,
    "bd"   => $bd,
    "pass" => $pass);
// coneccion al mysqli
$mysqli= new mysqli($cfg['host'],$cfg['user'], $cfg['pass'], $cfg['bd']);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
}?>
