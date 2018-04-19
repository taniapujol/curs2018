<?php
    // echo 'entro en el header'.'<br>';
    // comporvamos si se iniciado una seccion
    if(isset($_SESSION['tipo'])) {
        // echo 'ja estoy logeado';
        $tipo = $_SESSION['tipo'];
    } else { 
        // echo 'no estoy logeado y lanzo el formulario de login';?>
        <form action="" method="post">
            <i class="fas fa-sign-in-alt fa-6x"></i>
            <input type="text" name="user" id="user" placeholder="USERNAME">
            <br>
            <input type="password" name="password" id="password" placeholder="PASSWORD">
            <br>
            <br>
            <br>
            <input type="submit" value="SIGN IN" name="login">
        </form>
        <?php    
        include('php/util/funciones.php');       
        if (isset($_POST['login'])) {
            $usuario = $_POST['user'];
            $password = $_POST['password'];
            $result = checkUser($usuario,$password);
            if ($result == 1) {
               include('php/navbar.php');
            } else {
                echo('Usuario o Contraseña no valido');
            }
        }   
    // fin de comprovar seccion
    } 

// fin del archivo header.php
?>