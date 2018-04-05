<?php
// funcion suma
function suma ($x,$y)
{
        $result = $x + $y;
        return $result;
}

// funcion resta
function resta ($x, $y)
{           
    $result = $x - $y;
    return $result;
}

// funcion multiplicar
function multiplicar ($x, $y)
{           
    $result = $x * $y;
    return $result;
}

// funcion dividir
function dividir ($x, $y)
{   
    if ($y === 0) {
        $result = 'ERROR';
    } else {       
        $result = $x / $y;
    }
    return $result;

}

// funcion calculadora
function calculadora($operacion,$x,$y)
{
    switch ($operacion) {
        case 'suma':
            $resultado = suma($x,$y);
            break;
        case 'resta':
            $resultado = resta($x,$y);
            break;
        case 'multiplicar':
            $resultado = multiplicar($x,$y);
            break;
        case 'dividir':
            $resultado = dividir($x,$y);
            break;        
    }
}

// funcion obtener valor del display

?>