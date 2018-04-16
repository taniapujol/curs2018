<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- link de fontaweson -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        // inicializaciones de variables
        $user       = '';
        $password   = ''; 
        $mensaje    = '';
        $color      = 'black';
        // creamos los usuarios permitido para login
        $usuarios = array(
            'juan'      => 123 ,
            'tania'     => 456 ,
            'carles'    => 789 );
        if (isset($_POST['login'])) {
            $user      = $_POST['user'];
            $password   = $_POST['password'];
            // comprovacion de datos
            echo $user.'<br>';
            print_r( $usuarios[$user].'<br>');
            echo $password;
            if (array_key_exists($user,$usuarios) && $password == $usuarios[$user]) {
               $_SESSION['usuario'] = $user;
               header('Location: http:/session.php');
            } else {
                $color = 'red';
                $mensaje = 'usuario o password erroneo';
            }
        }
    ?>
    <form action="login.php" method="post">
    <i class="fas fa-user-circle fa-6x"></i>
    <input type="text" name="user" id="user" placeholder="USERNAME" style="border:3px solid <?=$color?>;">
    <br>
    <input type="password" name="password" id="password" placeholder="PASSWORD" style="border:3px solid <?=$color?>;">
    <div class "mensaje" style="color:red; font-size:2em;">
        <?=$mensaje?>
    </div>
    <input type="submit" value="SIGN IN" name="login">
    </form>
</body>
</html>