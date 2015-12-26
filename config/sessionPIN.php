<?php
		//Checking PIN Session.
		if(!($_SESSION['log'] == "login")){
			$_SESSION['log'] == 'undefined';
		}
		
		if($_SESSION['log'] == "login"){
		}else{
			//session_destroy();
			//$_SESSION[] = array();
			header('Location: config/pin.php?er=er');
		}
?>