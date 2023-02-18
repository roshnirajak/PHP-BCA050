<?php  
	session_start();
	echo($_SESSION['user_email']);
	echo($_COOKIE['user2']);
	if(isset($_REQUEST['pwd'])){
		$var= $_REQUEST['pwd'];
		echo($var);
	}
?>