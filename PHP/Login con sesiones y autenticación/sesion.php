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
            <h1>Buenos Dias, <?=$_SESSION['usuario']?> </h1>
            <form action="" method="post">
                <input type="submit" name="cerrar" value="CERRAR SESION">
            </form>
               
            <?php 
             if (isset($_REQUEST['cerrar'])){
                // echo 'cerrar session habilitado';
                session_destroy();
                /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
                $host  =   $_SERVER['HTTP_HOST'];
                $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'login.php';
                header("Location: http://$host$uri/$extra");
                exit;
             }
            ?>         
        <?php } else {
            /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
            $host  =   $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'login.php';
            header("Location: http://$host$uri/$extra");
            exit;
        }
    ?>
</body>
</html>