<?php  
	require 'Note.class.php';
	Core::filter();
	
	$id = $params['id'];
	$notescategorie = $db->prepare('SELECT * FROM notescategories WHERE id=?',[$id],1);
	$notes = $db->prepare('SELECT * FROM notes WHERE notescategories_id=?',[$id],2);

	if (isset($_POST['addNote'])) {
		extract($_POST);
		$note = new Note($titre, $contenu, $id);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Note/notecategorie.views.php';
?>