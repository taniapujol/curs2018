<?php
if (($_SESSION['usuario']['tipo'] != 'none')&& isset($_POST['seccio'])){
    // switch segons el enllaços dinamics creats.
    $botones = getButton('obras');
    foreach ($botones as $boton) {
        switch ($_POST['seccio']) {
            case $boton:
                echo "<div class=\"jumbotron text-uppercase\">";
                echo "<h1 class=\"display-4 text-center\">".$boton."</h1>";
                echo "</div>";
                // Pintamos el contenido de las secciones
                printContent($boton);
                include("php/Pages/modal.php");
        }
    }
    // switch per el enllaços fitxes.
    switch ($_POST['seccio']) {
        case 'SingIn':
            include("php/Pages/login.php");
            break;
        case 'SingOut':
            unset($_SESSION['usuario']['nombre']);
            unset($_SESSION['usuario']['tipo']);
            session_destroy();
            $_POST['seccio']='SingIn';
            header("Location: index.php");
            break;
        case 'prestamos':
            include ("php/Pages/prestamos.php");
            break;
        case 'socios':
            include("php/Pages/socios.php");
            break;
        default:
            include("php/Pages/biblioteca.php");      
    }
} else { 
    include("php/Pages/home.php");
}
?>