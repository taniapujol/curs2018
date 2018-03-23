<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESTACINA 2</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include('navBar.php');?> 
    </header> 
    <seccion>
        <div class="container border-right border-dark w-75">
            <?php 
                $fichero = $_GET["receta"]; //obteniendo fichero desde parametros
                $archivo = file("../$fichero");
                // pintando fichero
                foreach ($archivo as $fila) { 
                    echo($fila.'<br>');
                }
            ?>
        </div>
    </seccion>