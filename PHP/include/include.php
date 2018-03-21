<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incluye i Requiere</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include("html/cabecera.html"); //incluimos un fichero HTML
?>
<?php
    include("html/cuerpo2.php");
    require("html/cuerpo.html"); // requerimos un fichero HTML
?>
<?php 
    include("html/pie.html");
?>
</body>
</html>
