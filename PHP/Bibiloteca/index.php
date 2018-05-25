<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    <!-- link google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
    <!-- link Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- link bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- link a css propios -->
    <link rel="stylesheet" href="css/signin.css">
    <!-- Carga de funciones php -->
    <?php include('php/util/funciones.php');?>
</head>
<body>
    <?php
        // incluimos el archivo de configuracion
        include ('php/Util/cfg.php');
        // incluimos la cabecera, cuerpo y pie de la web
        include ('php/header.php');
        include ('php/body.php');
        include ('php/footer.php');
    ?>
    <!-- link bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>