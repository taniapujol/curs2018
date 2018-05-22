<?php 
    if (isset($_SESSION['usuario'])) {
        if (isset($_REQUEST['seccio'])) {
            switch ($_REQUEST['seccio']) {
                case 'biblioteca':
                    # code...
                    break;
                case 'prestamos':
                    # code...
                    break;
                case 'Socios':
                    # code...
                    break;
            }
        }
    }  else {
        include('php/view/home.php');
        if (isset($_REQUEST['seccio'])) {
            switch ($_REQUEST['seccio']) {
                case 'login':
                include('php/view/login.php');
                break;
            case 'registre':
                include('php/view/registre.php');
                break;
           }
        }
    }
?>