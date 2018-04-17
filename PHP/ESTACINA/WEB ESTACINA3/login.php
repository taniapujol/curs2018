<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>
<body>
<?php 
    // inicializaciones de variables
    $username = '';
    $password = '';
    $mensaje = '';
    $color = 'white';
    // creamos los usuarios permitido para login
    $usuarios = array(
        'juan'      => 123 ,
        'tania'     => 456 ,
        'carles'    => 789 );
    if (isset($_POST['login'])) {
        
        // recogemos los inputs del formulario
        $username = $_POST['user'];
        $password = $_POST['password'];

        // comprovacion de datos primero si es administrador y despues si es usuario
        if ($username == 'JEFE' && $password == 'JEFE-2018') {
            $_SESSION['usuario'] = $username;
            $_SESSION['tipo']='admin';
            /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'BackEnd/backEnd.php';
            header("Location: http://$host$uri/$extra");
            exit;
        } elseif (array_key_exists($username,$usuarios) && $password == $usuarios[$username]) {
            $_SESSION['usuario'] = $username;
            $_SESSION['tipo']='usuario';
            /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
            $host  =   $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'BackEnd/backEnd.php';
            header("Location: http://$host$uri/$extra");
            exit;
        } else {
            $username = '';
            $password = '';
            $color = 'red';
            $mensaje = 'Usuario o Contraseña incorrecta';
        }
        
    }
?>
<img src="img/LogoLogin.jpg">
<form action="" method="post">
    <i class="fas fa-sign-in-alt fa-6x"></i>
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
