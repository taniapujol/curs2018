<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WikiBooK</title>
    <!-- Cargando libreria de funciones -->
    <?php include_once('php/util/funciones.php')?>
    <!-- link css boostrasp -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
   
    <?php 
        // comprobamos si exite session iniciada
        if(!isset($_SESSION['usuario'])){
            $_SESSION['usuario'] = initCfg();
            // print_r($_SESSION['usuario']);
            if ($_REQUEST['singIn']) {
                checkUser($_REQUEST['user'],$_REQUEST['pass']);
            }
        }
        // incluimos la cabecera, cuerpo y pie de la web
        include ('php/view/header.php');
        include ('php/view/body.php');
        include ('php/view/footer.php');
    ?>
    <!-- Scripts de bootstrap -->
    
</body>
</html>