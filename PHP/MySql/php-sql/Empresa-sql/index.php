<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa php-sql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('php/confing.php');$card;?>
    <div class="jumbotron">
        <h1 class="display-4">Consultas de con la base de datos
        <strong>EMPRESA</strong></h1>
        <p>  1. En la base de datos “empresa”:
            <br> a. Contad cuantos clientes hay en total
            <br> b. Recuperad el NOMBRE de todos los empleados en orden de fecha de contrato descendente.
            <br> c. Seleccionad SOLO el último pedido insertado
            <br> d. Agrupad los pedidos por fecha para saber si existe alguna fecha con más de un pedido
            <br> e. Modificad la fecha de todos los contratos por la fecha actual
        </p>
    </div>
    <div class="container">
        <h3 style="margin:10% 0 10%, text-align:centre;">RESULTADOS</h3>
        <div class="container">
            <div class="row">
                <?php include('php/printcards.php');?>
            </div>
            <?php include('php/printresult.php');?>
        </div>
    </div>
    <?php $mysqli->close(); ?>
    <!-- scripts for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>