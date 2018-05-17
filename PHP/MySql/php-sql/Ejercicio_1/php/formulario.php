<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios en php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
    // inicializacion de las variables de recogida de campos del formulario
    $nombre = " ";
    $apellidos = " ";
    $edad = " ";
    $email = " ";
    $comentario = " ";
    // variable de error inicializadas a '' 
    $errorNombre = " ";
    $errorEmail = " ";
    $errorEdad = " ";
    // variables para el estilo 
    $color = "black";
    $displayNom = 'none';
    $displayEdad = 'none';
    $displayEmail = 'none';
    
    // Validadión del formulario
        if (isset($_POST['submit'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $comentario = $_POST['comentario'];
                     
            if ($nombre == ' ') {
                $errorNombre = 'Este campo es obliglatorio';
                $color = 'red';
                $displayNom = 'block';
            } 
            if ($edad < 18) {
                $errorEdad = 'Debes de tener 18 años o más';
                $color = 'red';
                $displayEdad = 'block';
            }  
            if ($email == ' ') {
                $errorEmail = 'Este campo es obliglatorio';
                $color = 'red';
                $displayEmail = 'block';
            } else {
                $arrayEmail = str_split($email);
                if (!in_array('@',$arrayEmail)) {
                    $errorEmail = 'La direccion de correo es erronea';
                    $color = 'red';
                    $displayEmail = 'block';
                }
            }
        } ?>
    <!-- Formulario -->
    <div class="container">
        <form action="formulario.php" method="post">
            
            <!-- campo nombre obligatorio con mensaje de error-->
            <span style="color:<?=$color;?>"> * </span><label for="nombre">NOMBRE : </label><br>
            <input type="text" name="nombre" id="nombre" value="<?= $nombre?>" placeholder="Tu Nombre">          
            <div class="obligatorio" style="display:<?=$displayNom?>"><?= $errorNombre; ?></div><br>
            
            <!-- campo apellido -->
            <label for="apellidos">APELLIDOS : </label>
            <input type="text" name="apellidos" id="apellidos" style="margin-bottom: 10px;" value="<?= $apellidos?>"><br>

            <!-- campo edad con mensaje de error si es menor de 18 años-->
            <label for="edad">EDAD : </label>
            <input type="number" name="edad" id="edad" value="<?= $edad?>">
            <div class="obligatorio" style="display:<?=$displayEdad?>"><?= $errorEdad ?></div><br>

            <!-- campo email obligatorio con mensaje de error-->
            <span style="color:<?=$color = 'black';?>"> * </span><label for="email">E_MAIL : </label>
            <input type="text" name="email" id="email" value="<?= $email?>">
            <div class="obligatorio" style="display:<?= $displayEmail?>"> <?= $errorEmail ?> </div><br>

            <!-- campo comentario -->
            <label for="comentario">COMENTARIOS</label><br>
            <textarea name="comentario" id="comentario" cols="30" rows="10" placeholde="Escribe aqui tu comentario" value="<?=$comentario?>"></textarea><br>

            <!-- botton de enviar -->
            <input type="submit" name="submit" value="ENVIAR FORMULARIO" style="background-color:black; color:white; font-size:1.5em; width:97%; heigth:100px; border-radius:10px">
          
        </form>
    </div>
</body>
</html>