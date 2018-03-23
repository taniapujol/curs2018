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
        <?php include('php/navBar.php'); ?>
        <?php include('php/EstacionActual.php'); ?>
        <!-- Pintamos el fondo del jumbotron sengun la estación -->
        <?php
            $class_bg;
            switch ($estacion) {
                case 'invierno':
                    $class_bg ='img/invierno.png';    
                    break;
                case 'primavera':
                    $class_bg ='img/primavera.png';    
                    break;
                case 'otoño':
                    $class_bg ='img/otoño.png';    
                    break;
                case 'verano':
                    $class_bg ='img/verano.png';    
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
    <seccion>
        <div class="container">
            <!-- (class para ver dos columnas w-25 float-left) -->
            <div class="row"> 
                <!-- Miramos dentro de nuestra carpeta que tipos de ficheros tengo -->
                <?php 
                    $directorio = 'txt';
                    $carpeta = scandir($directorio);
                    foreach ($carpeta as $ficheros) {
                        if ($ficheros != "." && $ficheros != ".." && substr($ficheros,-4)=='.txt') {
                ?>
                <div class="col" style="margin-top:20px">
                    <?php 
                        $fichero = explode('.', $ficheros);
                        // echo($fichero[0].','.$fichero[1]);
                    ?>
                    <div class="card Ancho">
                        <img class="card-img-top" src="<?='img/'.$fichero[0].'.jpg'?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?=$fichero[0]?>
                            </h5>
                            <a href="php/receta.php?receta=<?=$directorio.'/'.$ficheros?>" class="btn btn-primary" target="_blank">Ver Receta</a>
                        </div>
                    </div>
                </div>
                        <?php } //cierre de if ?>
                    <?php } //cierre de foreach ?>
            </div>
            <div class="row w-75 float-right d-none">
                <h1>hola</h1>
            </div>
        </div>

    </seccion>
    <!-- Scripts de boostrap -->
    <script>
        function
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>