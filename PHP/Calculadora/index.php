<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculador</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Diplomata+SC" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        include('biblioteca/funciones.php');
    ?>
    <div class="titulo">
        <h1>Calculadora</h1>
    </div>
    <form action="biblioteca/form-php.php" method="get">
        <div class="calculadora">
            <!--Introducimos el campo de display -->
            <header class="top">
                <label class="op"></label>
                <input type="text" name="display" id="display" placeholder="0">
            </header>
            <!-- Introducimos los campos de los numeros y las operaciones -->
            <div class="cuerpo">
                <input type="button" name="btn" value="7" class="btn">
                <input type="button" name="btn" value="8" class="btn">
                <input type="button" name="btn" value="9" class="btn">
                <input type="button" name="suma" value="+" class="btn">
                <input type="button" name="C" value="&#8592" class="btn">
                <input type="button" name="btn" value="4" class="btn">
                <input type="button" name="btn" value="5" class="btn">
                <input type="button" name="btn" value="6" class="btn">
                <input type="button" name="resta" value="-" class="btn">
                <input type="button" name="CE" value="CE" class="btn">
                <input type="button" name="btn" value="1" class="btn">
                <input type="button" name="btn" value="2" class="btn">
                <input type="button" name="btn" value="3" class="btn">
                <input type="button" name="por" value="&times" class="btn">
                <input type="submit" name="igual" value="=" class="btn igual">
                <input type="button" name="btn" value="0" class="btn zero">
                <input type="button" name="btn" value="." class="btn">
                <input type="button" name="divi" value="/" class="btn">
            </div>
        </div>
    </form>
    <?php 
    
    
    ?>
    <!-- Cargando jquery-3 y calculadora.js  -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</body>
</html>