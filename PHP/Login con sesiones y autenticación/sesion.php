<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>session</title>
</head>
<body>
    <?php
        if (isset($_SESSION['usuario'])) { ?>
            <br>
            <br>
            <br>
            <h1>Buenos Dias, <?=$_SESSION['usuario']?> </h1>
            <br>
            <br>
            <br>
            
        <?php } else {
            header('login.php');
        }
    ?>
</body>
</html>