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
    include('php/utils/usuarios.php');
    // recoremos la array de usuarios
    if ($nfilas >0) {
        $fila = $users->fetch_assoc();
        $_SESSION['usuario']['tipo'] = $_SESSION['tipo'] = $fila['tipo'];
        $_SESSION['usuario']['username'] = $usuario;
        return true;
    } 
    return false;
}
// La función 'newUser()' chequea los usuarios y nos devuelve el tipo de usuario que es   
function newUser ()
{
    if (isset($_POST['loginNew'])) {
        // incluimos la connecion a la table usuarios
        include('php/utils/connect.php');
        $user=$_post['user'];
        $password=md5($_POST['password']);
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $direccion=$_POST['direccion'];
        $emil=$_POST['email'];
        $telf=$_POST['telefono'];
        $tipo='usuario';        
        $sql = "INSERT INTO `fullsport`.`usuarios` (`user`, `password`, `nombre`, `apellidos`, `direccion`, `email`, `telefono`, `tipo`) VALUES ('$user', '$password', '$nombre', '$apellidos', '$direccion', '$email', '$telefono', 'usuario');";
        $new= $con->query($sql);
        if($new){
            header("Location:php/view/body/form-login.php");
        } else {
            echo 'error al introducir datos';    
        };
        mysqli_close($con);
    return false;
    }
}

// fin funciones
?>