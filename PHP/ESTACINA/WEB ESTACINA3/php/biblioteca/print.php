<?php 
    //obteniendo fichero desde parametros
    if($_POST){
        $fichero = $_POST['fichero'];
        // echo $fichero.'<br>';
        $archivo = file("$fichero");
        // echo $archivo;
        // pintando fichero
        foreach ($archivo as $fila) { 
            echo($fila.'<br>');
        } 
    } else {
        $archivo = file("../$fichero");
        // pintando fichero
        foreach ($archivo as $fila) { 
            echo($fila.'<br>');
        }
    }
?>