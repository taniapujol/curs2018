<?php

include("../Util/confing.php");

$devolucion = $_POST['devolucion'];
$id = $_POST['id'];
 
$sql = "UPDATE biblioteca.prestamo SET fecha_devuelto='$devolucion' WHERE id='$id'";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

if($res) echo "ok";
else echo "error";



mysqli_close($con);



?>