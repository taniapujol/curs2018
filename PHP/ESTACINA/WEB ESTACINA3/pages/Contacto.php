<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESTACINA 2</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .Ancho{ width: 18rem;}
    </style>
</head>

<body>
    <header>
        <!-- incluimos la barra de navegación y el php que nos calcula la estacion donde nos encontramos -->
        <?php 
            if (isset($_GET['pages'])) {
                $page = $_GET['pages'];
            } else { $page = 'index';}
            include('../php/navBar.php'); ?>
        <?php include('../php/EstacionActual.php'); ?>
        <!-- Pintamos el fondo del jumbotron sengun la estación -->
        <?php
            $class_bg;
            switch ($estacion) {
                case 'invierno':
                    $class_bg ='../img/invierno.png';    
                    break;
                case 'primavera':
                    $class_bg ='../img/primavera.png';    
                    break;
                case 'otono':
                    $class_bg ='../img/otoño.png';    
                    break;
                case 'verano':
                    $class_bg ='../img/verano.png';    
                    break;
            }
        ?>
        <div class="jumbotron jumbotron-fluid" style="background:url('<?=$class_bg?>');">
            <div class="container">
                <h1 class="display-4 text-uppercase font-weight-bold">
                    <?=$estacion?>
                </h1>
            </div>
        </div>
    </header>
    <main>
    </main>
</body>
</html>