<?php

// La función checkUser chequea los usuarios y nos devuelve el tipo de usuario que es   
function checkUser ($user,$password)
{
    // creamos los usuarios permitido para login
    $usuarios = array(
        'admin'     => 'admin',
        'juan'      => 123 ,
        'tania'     => 456 ,
        'carles'    => 789 );
    // comprovacion de datos primero si es administrador y despues si es usuario
    if (array_key_exists($user,$usuarios) && $password == $usuarios[$user]) {
        $_SESSION['usuario'] = $user;
        $_SESSION['tipo'] = ($user == 'admin' && $password == 'ADMIN') ? 'admin' : 'usuario' ;
        return 1;
    } else {
        // Usuario o Contraseña incorrecta
        return 0;
    }
}

// fin de archivo funciones.php
?>