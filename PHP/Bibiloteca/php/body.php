<?php
    // echo $_SESSION['usuario']['tipo'];
    // echo $_POST['seccio'];
   if ($_SESSION['usuario']['tipo'] != 'none'){
       if (isset($_POST['seccio'])) {
            // switch segons el enllaços dinamics creats.
            $botones = getButton('obras');
            foreach ($botones as $boton) {
            switch ($_POST['seccio']) {
                case $boton:
                $dir="obras/".$boton.'/';
                // Pintamos el contenido de las secciones
                printContent($dir);
            }
        
            // switch per el enllaços fitxes.
            switch ($_POST['seccio']) {
                case 'SingIn':
                    include("php/Pages/login.php");
                    break;
                case 'SingOut':
                    unset($_SESSION['usuario']['nombre']);
                    session_destroy();
                    $_POST['seccio']='home';
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
       }
    
    
} else { 
    include("php/Pages/home.php");
}
?>