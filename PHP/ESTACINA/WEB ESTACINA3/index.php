<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESTACINA 3</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .Ancho{ width: 18rem;}
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
</head>

<body>
    <header>
        <!-- incluimos la barra de navegación y el php que nos calcula la estacion donde nos encontramos -->
        <?php 
            if (isset($_GET['pages'])) {
                $page = $_GET['pages'];
            } else { $page = 'index';}
            include('php/biblioteca/navBar.php');
            include('php/biblioteca/EstacionActual.php'); 
        ?>
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
                    $carpeta='';
                    switch ($estacion) {
                        // guardamos en la variable carpeta todos los ficheros que tengo de la estacion actual
                        case 'invierno':
                            $carpeta = scandir('estaciones/'.$estacion.'/'.$directorio);
                            // echo $estacion;
                            break;
                        case 'primavera':
                            $carpeta = scandir('estaciones/'.$estacion.'/'.$directorio);    
                            // echo 'estaciones/'.$estacion.'/'.$directorio;
                            break;
                        case 'otono':
                            $carpeta = scandir('estaciones/'.$estacion.'/'.$directorio);    
                            // echo $estacion;
                            break;
                        case 'verano':
                            $carpeta = scandir('estaciones/'.$estacion.'/'.$directorio);    
                            // echo $estacion;
                            break;
                    }
                    foreach ($carpeta as $ficheros) {
                    // escojo los ficheros solo con extencion '.txt' y elimino los '.' y '..'
                    if ($ficheros != "." && $ficheros != ".." && substr($ficheros,-4)=='.txt') {
                ?>
                <div class="col" style="margin-top:20px">
                    <?php 
                        // la funcion explode divide en dos array segun el caracter que le pasamos -> '.'
                        $fichero = explode('.', $ficheros);
                        // print $fichero[0];
                    ?>
                    <div class="card Ancho">
                        <img class="card-img-top" src="<?='estaciones/'.$estacion.'/img/'.$fichero[0].'.jpg'?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?=$fichero[0]?>
                            </h5>
                            <!-- le pasamos por parametro atraves del enlace la ruta del fichero que queremos abrir. la estructura es: <a href="archivo_donde_se_abrira?variable=pasamos por php el fichero" -->
                            <a href="pages/receta.php?receta=<?='estaciones/'.$estacion.'/'.$directorio.'/'.$ficheros?>" class="btn btn-primary">Ver Receta</a>
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