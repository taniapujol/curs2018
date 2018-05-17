<?php 
    $sql="Select count(*) from clientes";
    $result = $mysqli->query($sql);
    $filas = $result-> fetch_all();
    foreach ($filas as $fila) {
        foreach ($fila as $key => $value ){
            echo $value;
        }  
    }
    
?>