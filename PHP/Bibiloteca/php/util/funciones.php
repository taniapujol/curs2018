<?php
// ____________________________________________________________________________________________
// 
//                          FUNCIONES DE PHP    
// 
// ____________________________________________________________________________________________


// La función 'checkUser( @param:usuario y contraseña )' chequea los usuarios y nos devuelve el tipo de usuario que es   
function checkUser ($dni,$password)
{
    // incluimos la connecion a la table usuarios
    include('php/Util/confing.php');
    echo('connecion establecida');
    $sql = "SELECT nombre, tipo
            FROM socio 
            WHERE DNI='$dni' AND password='$password'";
    $users = $con->query($sql);
    $nfilas = mysqli_num_rows($users);
    mysqli_close($con);
    // recoremos la array de usuarios
    if ($nfilas >0) {
        $fila = $users->fetch_assoc();
        $_SESSION['usuario']['tipo'] = $_SESSION['tipo'] = $fila['tipo'];
        $_SESSION['usuario']['nombre'] = $fila['nombre'];
        echo('seccion iniciada');
        return true;
    } 
    return false;
}
// La función 'newUser()' chequea los usuarios y nos devuelve el tipo de usuario que es   
function newUser ($newUser)
{
    // incluimos la connecion a la table usuarios
    include('php/Util/confing.php');
    $dni=$newUser['dni'];
    $password=$newUser['password'];
    $nombre=$newUser['nombre'];
    $apellidos=$newUser['apellidos'];
    $direccion=$newUser['direccion'];
    $email=$newUser['email'];
    $tipo='usuario';        
    $sql = "INSERT INTO `socio` (`DNI`, `nombre`, `apellidos`, `direccion`, `email`, `tipo`,`password`) 
            VALUES (
                '$dni', 
                '$nombre', 
                '$apellidos', 
                '$direccion', 
                '$email', 
                '$tipo',
                '$password')";
    $new= $con->query($sql);
        if(!$new){
            echo 'error al introducir datos'; 
        };
        mysqli_close($con);
    return false;
}

// fin funciones
?>