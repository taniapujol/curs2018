<?php 
$host = "localhost";
$user = "root";
$bd = "aerolinia";
$pass = "tania1979";
// array asociativa para la conneccion
$cfg = array(
    "host" => $host,
    "user" => $user,
    "bd"   => $bd,
    "pass" => $pass);
// coneccion al mysqli
$mysqli= new mysqli($cfg['host'],$cfg['user'], $cfg['pass'], $cfg['bd']);
if ($mysqli -> connect_errno) {
    echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
}
$resultado = $mysqli->query("SELECT * from vuelo");
$fila = $resultado -> fetch_assoc();
foreach ($fila as $key => $value) {
    echo $key.' => '.$value.'<br>';
}
?>