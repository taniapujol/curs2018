<?php // Conectamos con el servidor y la base de datos
$host = "localhost";
$user = "root";
$bd = "biblioteca";
$pass = "tania1979";
// array asociativa para la conneccion
$cfg = array(
    "host" => $host,
    "user" => $user,
    "bd"   => $bd,
    "pass" => $pass);
// coneccion al mysqli
$con= new mysqli($cfg['host'],$cfg['user'], $cfg['pass'], $cfg['bd']);
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: ".$con->connect_error;
}?>
