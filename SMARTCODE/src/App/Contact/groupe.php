<?php  
	require 'Contact.class.php';
	Core::filter();
	
	$id = $params['id'];
	$groupe = $db->prepare('SELECT * FROM groupes WHERE id=?',[$id],1);

	$contacts = $db->prepare('SELECT * FROM contacts WHERE groupes_id=?',[$id],2);

	if (isset($_POST['addContact'])) {
		extract($_POST);
		$contact = new Contact($nom, $numero, $email, $id);
	}

	if (isset($_POST['modifier'])) {
		extract($_POST);
		Contact::modifier($nom, $numero, $email, $id);
	}

	if (isset($_POST['delete'])) {
		extract($_POST);
		Contact::delete($id);
	}

	if (isset($_POST['modGroupe'])) {
		extract($_POST);
		Contact::modGroupe($nom, $id);
	}

	if (isset($_POST['delGroupe'])) {
		extract($_POST);
		Contact::delGroupe($id);
	}
	require '../views/Core/navbar.php';
	require '../views/App/Contact/groupe.views.php';
?>