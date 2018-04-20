<?php
// ____________________________________________________________________________________________
// 
//                          FUNCIONES DE PHP    
// 
// ____________________________________________________________________________________________


// La funcion 'initCfg()' inicializamos todas las variables que necesito
function initCfg()
{
    $Cfg['user']="";
    $Cfg['pass']="";
    $Cfg['valid_admin-user']="admin";
	$Cfg['valid-admin-pass']="admin";
    $Cfg['valid-hash']= md5($Cfg['valid-admin-pass']);
    $Cfg['tipo'] = $_SESSION['tipo'] = 'none';
    return $Cfg;
}

// La función 'checkUser( @param:usuario y contraseña )' chequea los usuarios y nos devuelve el tipo de usuario que es   
function checkUser ($usuario,$password)
{
    // comprovacion de datos primero si es administrador y despues si es usuario
    if ($usuario == $_SESSION['usuario']['valid_admin-user'] && md5($password)==$_SESSION['usuario']['valid_hash']) {
        $_SESSION['usuario'] = $user;
        $_SESSION['tipo'] = 'admin';
        return true;
    } else {
        // Usuario o Contraseña incorrecta
        $_SESSION['tipo'] = 'none';
        return false;
    }
}

// La función 'getFiles(@param: directorio a leer)' nos devuelve una array con todos los ficheros
function getFiles($dir){
    $files = scandir($dir);
    // Eliminosmos '.' y '..' de la array files;
    unset($files[0]);
    unset($files[1]);		
    return $files;
}


// fin de archivo funciones.php
?>