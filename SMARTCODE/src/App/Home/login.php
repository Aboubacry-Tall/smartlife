<?php  
	require 'Home.class.php';

	if (isset($_POST['connexion'])) {
		extract($_POST);
		Home::login($mdp);
	}
	
	require '../views/App/Home/login.views.php';
?>