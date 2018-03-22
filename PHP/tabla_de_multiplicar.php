<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Multiplicar</title>
    <style>
        h1 { text-align: center; }
        table { 
            margin: 10% auto; 
            border-collapse: collapse; }
        table, tr, td { border: 2px solid #000; }
        td {
            width: 40px;
            height:40px;
            text-align: center;
            color: #fff;
        }
        .tomato {
            background-color: tomato;
        }
        .par {
            background-color: #000;
        }
    </style>
</head>
<body>
    <!-- Programa que calcula una tabla de multiplicar -->
    <div>
        <h1>TABLA DE MULTIPLICAR</h1>
        <table>
            <?php for ($i=1; $i<11; $i++) {
                if ($i%2 == 0) {
                    $color = 'tomato';
                } else {
                    $color = 'par';
                }  
            ?>
            <tr class="<?= $color;?>">
                <?php for ($j=1; $j<11; $j++) {?> 
                    <td> <?= $j*$i; ?> </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
    </div> 
</body>
</html>