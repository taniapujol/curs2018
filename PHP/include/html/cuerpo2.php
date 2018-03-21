<?php 
    //definicion de constantes;
    define ("valor", 200);

    $img = "\"img/mapa.jpg\""; 
    $img2 = "\"logo2.gif\"";
    print "<img src=$img >";
    print "<img src=$img2 alt=\"logo\">";
    
    $a = "i";
    $b = "j";
    $i = 100;
    $j = 500;
    echo "${$a} \n"; //interpolació de variables
    echo $$b ."<br>";
    echo valor."<br>"; // imprimo la contante

    //Operadores matemáticos - % - modulo su resto sera 0
    $val =0;
    for ($i=0; $i<7; $i++) { 
        $val++;
        if ($val%3 == 0) {
            echo $val."<br>";
        }
    }

?>