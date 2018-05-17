<?php
    // comprobamos si exite session iniciada
	if(isset($_POST['loginIn'])){
			$login = checkUser($_POST['user'],$_POST['pass']);
			$_POST['login'] = ($login) ? 'true' : 'false';
	}
	if(!isset($_SESSION['usuario'])){
			$_SESSION['usuario'] = initCfg();			
	}
	
?>