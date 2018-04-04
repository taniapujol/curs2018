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
</head>

<body>
    <header>
        <!-- incluimos la barra de navegación -->
        <?php include('navBar.php');?> 
    </header> 
    <seccion>
        <div class="container" style="margin:20px;">
            <div class="row">
                <div class="col w-25" id="lista">
                    <h5>Index de recetas</h5>
                    <ul>
                        <?php
                            $directorio = 'txt';
                            $carpeta = scandir('../'.$directorio);
                            foreach ($carpeta as $ficheros) {
                                if ($ficheros != "." && $ficheros != "..") {
                                    $fichero = explode('.', $ficheros);
                        ?>
                        <li>
                            <a href="#" onclick="cargarContenido('<?='../'.$directorio.'/'.$ficheros?>')">
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
                            include('print.php');
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