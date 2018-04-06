<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca de funciones php</title>
</head>
<body>
    <?php
        include('biblioteca/funciones.php');
    ?> 
    <?php 
        // funciones::printM();
        // $texto = funciones::tag_p("estoy entre un tag <p>");
        // echo ($texto);
        // $texto = funciones::tag_h1("estoy entre un tag <h1>");
        // echo ($texto);
        // $texto = funciones::tag_p_a("soy un enlace dentro de un tag <p>");
        // echo ($texto);
    ?>
    <?php
        // $diaMesActual = date("d n");
        // echo ($diaMesActual.'<br>');
        // $estacion = funciones::estacion();
        // echo ($estacion);
    ?>
    <?php 
        // $punto1 = array(7,5);
        // $punto2 = array(4,1);
        // $distancia = funciones::distancia($punto1,$punto2);
        // echo ($distancia++);
    ?>
    <?php 
        $array = array();
        for ($i=0;$i<10;$i++) {
        $n = rand(0,100);
        array_push($array,$n);
        }
        print_r($array); 
$sumatorio = funciones::sumatorio($array);
echo ($sumatorio);
    ?>
</body>
</html>
