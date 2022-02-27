<?php  
	session_start();
	session_destroy();
	$_SESSION = [];
	Core::redirige('login');
?>