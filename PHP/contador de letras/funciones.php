<?php 
    // funcion cuenta letras
    function CuentaLetras( $cadena)
    {    
        // quitar espacio una cadena
        $cadenaSinEspacios = str_replace (' ','',$cadena);
        echo($cadenaSinEspacios .'<br>'); 
        // separar por letras el string y transforma en array
        $arrayLetras=preg_split('//', $cadenaSinEspacios, -1, PREG_SPLIT_NO_EMPTY );
        print_r($arrayLetras);
        // calcula la veces que se repite un elemento de una array y nos devuelve una array associativa (key => value);
        $caracterRepetidos = array_count_values( $arrayLetras);
        echo('<br>');
        print_r ($caracterRepetidos);
        echo('<br>');
        $topCaracter = array_keys($caracterRepetidos,max($caracterRepetidos));
        $menorCaracter = array_keys($caracterRepetidos,min($caracterRepetidos));
        echo('<br>');
        print_r($topCaracter);
        echo('<br>');    
        print_r($menorCaracter);
        echo('<br>');
        print_r(array_keys($topCaracter));
    }
?>