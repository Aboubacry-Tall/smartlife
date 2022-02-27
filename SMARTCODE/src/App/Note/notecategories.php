<?php  
	require 'Note.class.php';
	Core::filter();
	
	$notecategories = $db->query('SELECT * FROM notescategories ORDER BY id ASC');

	if (isset($_POST['addNoteCategories'])) {
		extract($_POST);
		Note::addNoteCategories($nom);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Note/notecategories.views.php';
?>