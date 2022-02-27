<?php  
	require 'Contact.class.php';
	Core::filter();
	
	$groupes = $db->query('SELECT * FROM groupes ORDER BY id ASC');

	if (isset($_POST['addGroupe'])) {
		extract($_POST);
		Contact::addGroupe($nom);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Contact/groupes.views.php';
?>