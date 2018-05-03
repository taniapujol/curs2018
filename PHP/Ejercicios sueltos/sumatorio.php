<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumatorio</title>
</head>
<body>
    <?php 
        $num = array(
                'num1' => 10, 
                'num2' => 4,
                'num3' => 6,
                'num4' => 2,
                'num5' => 40,
                'num6' => 30,
                'num7' => 7,
                'num8' => 20,
                'num9' => 5,
                'num10' => 9,
            );
        $cont = 0;
        $sumatorio = 0;
        echo "numeros"."<br>";
        foreach ($num as $key => $value) {
            $sumatorio += $value; //$sumatorio = $sumatorio + $value;
            if ($cont == '0') {
                $maximo = $value;
                $minimo = $value;
            }
            if ( $value > $maximo) {
                $maximo = $value;
            } elseif ($value < $minimo) {
                $minimo = $value;
            }
            echo $value."<br>";
            $cont++;
        }
        $promedio = $sumatorio / $cont;
        echo "màximo = $maximo , minimo= $minimo , promedio = $promedio";

    ?>
</body>
</html>