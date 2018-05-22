<?php
	if (isset($_POST['seccio']) && $_SESSION['usuario']['tipo'] != 'invitado'){
		// switch segons el enllaços dinamics creats.
		$botones = getButton('deportes');
		foreach ($botones as $boton) {
			switch ($_POST['seccio']) {
				case $boton:
				$dir="deportes/".$boton.'/';
				$dir2="img/".$boton.'/';
				// Pintamos el contenido de las secciones
				printContent($dir,$dir2);
			}
		}
		// switch per el enllaços fitxes.
		switch ($_POST['seccio']) {
			case 'home':
				echo 'home';
				break;
			case 'SingIn':
				include("php/view/body/form-login.php");
				break;
			case 'SingOut':
				unset($_SESSION['usuario']['username']);
				session_destroy();
				$_POST['seccio']='home';
				header("Location: index.php");
				break;
			case 'upload':
				// echo $_POST['seccio'];
				$subsec=$_POST['seccio'];
				include ("php/view/body/form-subida.php");
                break;
			case 'experience':
				// echo $_POST['seccio'];
				include("php/view/body/experiencia.php");
				break;
               	
		}
	} else { 
		if (isset($_POST['seccio'])=='registro') {
			include("php/view/body/form-registro.php");
		}
		include('php/view/body/home.php'); }
?>