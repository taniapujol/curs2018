<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESTACINA 2</title>
    <!-- link de bootstrap para css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>

<body>
    <header>
        <!-- incluimos la barra de navegación -->
        <?php
            if (isset($_GET['pages'])) {
                $page = $_GET['pages'];
            } else { $page = 'index';} 
            include('../php/biblioteca/navBar.php');
        ?> 
    </header> 
    <seccion>
        <div class="container" style="margin:20px;">
            <div class="row">
                <div class="col w-25" id="lista">
                    <h5>Index de recetas</h5>
                    <ul>
                        <?php
                        // imprimir todas las recetas en el index de recetas 
                            $directorio = 'txt';
                            $carpetaEstacion= '';
                            $carpetaInvierno = scandir('../estaciones/invierno/'.$directorio);
                            $carpetaPrimavera = scandir('../estaciones/primavera/'.$directorio);
                            $carpetaOtono = scandir('../estaciones/otono/'.$directorio);
                            $carpetaVerano = scandir('../estaciones/verano/'.$directorio);
                            // unimos en una sola variable todos los scandir realizados
                            $carpeta =  array_merge($carpetaInvierno,$carpetaPrimavera,$carpetaOtono,$carpetaVerano);
                            // recoremos la variable carpeta para extraer los archivos.
                            foreach ($carpeta as $ficheros) {
                                if ($ficheros != "." && $ficheros != "..") {
                                    $fichero = explode('.', $ficheros);
                        ?>
                        <li>
                            <?php 
                                if ( in_array($ficheros,$carpetaInvierno) ) {
                                    $carpetaEstacion='invierno';
                                }
                                if ( in_array($ficheros,$carpetaPrimavera) ) {
                                    $carpetaEstacion='primavera';
                                }
                                if ( in_array($ficheros,$carpetaOtono) ) {
                                    $carpetaEstacion='otono';
                                }
                                if ( in_array($ficheros,$carpetaVerano) ) {
                                    $carpetaEstacion='verano';
                                }
                                $urlFichero = '../../estaciones/'.$carpetaEstacion.'/'.$directorio.'/'.$ficheros;
                            ?>
                            <a href="#" onclick="cargarContenido('<?= $urlFichero ?>')">
                                <?=$fichero[0]?>
                            </a>
                        </li>
                        <?php } //cierre de if ?>
                    <?php } //cierre de foreach ?>
                    </ul>
                </div>
                <div class="col w-75" id="content">
                    <?php 
                         
                        if (!$_POST){
                            $fichero = $_GET["receta"];
                            include('../php/biblioteca/print.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </seccion>
    <!-- Scripts de boostrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/funcioncargar.js"></script>
</body>