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
    <link rel="stylesheet" href="css/style.css">
    <!-- Carga de funciones php -->
    <?php include('php/Util/funciones.php');?>
    <!-- Link de alertify.js -->
        <!-- JavaScript -->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- link a javascripts propios -->
    <script src="js/ajax_newUser.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/ajax_modal.js"></script>
</body>
</html>