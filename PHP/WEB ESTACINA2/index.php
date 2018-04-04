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
                case 'otono':
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
            <div class="row">  
                <?php 
                    // guardamos en la variable directorio donde encontramos los archivos que queremos buscar
                    $directorio = 'txt';
                    // guardamos en la variable carpeta todos los ficheros que tengo
                    $carpeta = scandir($directorio);
                    foreach ($carpeta as $ficheros) {
                        // escojo los ficheros solo con extencion '.txt' y elimino los '.' y '..'
                        if ($ficheros != "." && $ficheros != ".." && substr($ficheros,-4)=='.txt') {
                ?>
                <div class="col" style="margin-top:20px">
                    <?php 
                        // la funcion explode divide en dos array segun el caracter que le pasamos -> '.'
                        $fichero = explode('.', $ficheros);
                        // echo($fichero[0].','.$fichero[1]);
                    ?>
                    <div class="card Ancho">
                        <img class="card-img-top" src="<?='img/'.$fichero[0].'.jpg'?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?=$fichero[0]?>
                            </h5>
                            <!-- le pasamos por parametro atraves del enlace el fichero que queremos abrir. la estructura es: <a href="archivo_donde_se_abrira?variable=pasamos por php el fichero" -->
                            <a href="php/receta.php?receta=<?=$directorio.'/'.$ficheros?>" class="btn btn-primary" target="_blank">Ver Receta</a>
                        </div>
                    </div>
                </div>
                        <?php } //cierre de if ?>
                    <?php } //cierre de foreach ?>
            </div>
        </div>

    </seccion>
    <!-- Scripts de boostrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>