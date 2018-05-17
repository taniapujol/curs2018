<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FullSport</title>
    <!-- Cargando libreria de funciones -->
    <?php include_once('php/utils/funciones.php')?>
    <!-- link css propio -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- link css boostrasp -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- link googleFons -->
    <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
    
</head>
<body>
    <?php 
        // incluimos el archivo de configuracion
        include ('php/utils/cfg.php');
        // incluimos la cabecera, cuerpo y pie de la web
        include ('php/view/header.php');
        include ('php/view/body.php');
        include ('php/view/footer.php');
    ?>
    <!-- Scripts de bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>