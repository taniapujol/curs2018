<?php
    // comprobamos si exite session iniciada
	if(isset($_POST['loginIn'])){
			$login = checkUser($_POST['user'],$_POST['pass']);
			$_POST['login'] = ($login) ? 'true' : 'false';
	}
	if(isset($_POST['loginNew'])){
			include("php/view/body/form_registro.php");
			$loginNew = newUser();
	}
	if(!isset($_SESSION['usuario'])){
			$_SESSION['usuario'] = initCfg();			
	}
	
?>