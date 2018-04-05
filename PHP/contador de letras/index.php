<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTADADOR DE LETRAS</title>
</head>
<body>
    <form>
        <label for="texto">Introduce un texto</label>
        <input type="text" name="texto" id="texto">
        <input type="submit" value="contar letras">
        <?php 
            $texto='';
            $resultado="";
            if (isset($_GET['texto'])) {
                $texto = $_GET['texto'];
            }
        ?>
    </form>
    <div id="resultado"><?=$resultado?></div>
    <br>
    <hr>
    <h5>echo</h5>
    <?php 
        include("funciones.php");
        echo('la cadena es =>'.$texto.'<br>');
        CuentaLetras( $texto );
    ?>
</body>
</html>