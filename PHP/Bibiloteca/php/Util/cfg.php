<?php
    // comprobamos si exite session iniciada
	if(isset($_POST['SignIn'])){
            $login = checkUser($_POST['dni'],$_POST['password']);
			$_POST['login'] = ($login) ? 'true' : 'false';
	}
	if(!isset($_SESSION['usuario'])){
			$_SESSION['usuario'] =initCfg();		
	}	
?>