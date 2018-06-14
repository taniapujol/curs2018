<?php 
//Para comprobar si se recibe un post desde un ajax
if ($_SERVER['REQUEST_METHOD']==='POST'){
	//Para almacenar los datos JSON recibidos en una variable
	$request= file_get_contents('php://input');
	//Para convertir un Json en un array de php
	$datos = json_decode($request,true);
	$valores='"';
	$campos="";
	foreach ($datos as $key => $value){
		if ($value['name'] != 'password') {
			$campos .= $value['name'].',';
			$valores.= $value['value'].'","';
		} else { 
			$campos .= $value['name'].',';
			$valores.= md5($value['value']).'","';
		}
	}
	$campos = substr($campos,0, -1);
	$valores = substr($valores,0, -2);
	// sql para la conexion
	$sql = "INSERT INTO socio ($campos) VALUES ($valores)";
    // incluimos la conexion a la base de datos
	include('../Util/confing.php');
	$new= $con->query($sql);
    if ($new) {
		mysqli_close($con);
		echo json_encode([
			"error"		=> 0,
			"resultado" => "se ha grabado"
			]);	
	} else {
		echo json_encode([
			"error"		=> 1,
			"resultado" => "NO se ha grabado!!"
			]);	
	}
} else {
	echo json_encode([
		"campos" => "KO",
		"error"		=> 1,
		"valores"	=> "no hay"
	]);
}
// fin del php
?>