<?php  
	require 'Contact.class.php';
	Core::filter();
	
	$favoris = $db->prepare('SELECT * FROM contacts WHERE etat=?',[1],2);

	if (isset($_POST['addContact'])) {
		extract($_POST);
		$contact = new Contact($nom, $numero, $email);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Contact/favoris.views.php';
?>