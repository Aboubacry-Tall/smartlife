<?php  
	require 'Contact.class.php';
	Core::filter();
	
	$contacts = $db->query('SELECT * FROM contacts ORDER BY id DESC');

	if (isset($_POST['addContact'])) {
		extract($_POST);
		$contact = new Contact($nom, $numero, $email);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Contact/contacts.views.php';
?>