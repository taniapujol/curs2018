<?php 
 if (isset($_REQUEST['cerrar'])) {
    session_destroy();
    /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '../index.php';
    header("Location: http://$host$uri/$extra");
    exit;
 }
?>