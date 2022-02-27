<?php  
	require 'Contact.class.php';
	Core::filter();
	
	$id = $params['id'];
	
	$contact = $db->prepare('SELECT * FROM contacts WHERE id=?',[$id],1);

	if (isset($params['e'])) {
		if ($contact->etat == 0) {
			Contact::favoris($id, 1);
		}else{
			Contact::favoris($id, 0);
		}
	}

	if (isset($_POST['completer'])) {
		extract($_POST);
		Contact::completer($fixe, $fonction, $ville, $apropos, $id);
	}

	if (isset($_POST['modifier'])) {
		extract($_POST);
		Contact::modifier($nom, $numero, $email, $id);
	}

	if (isset($_POST['delete'])) {
		extract($_POST);
		Contact::delete($id);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Contact/contact.views.php';
?>