<?php  
	require 'Note.class.php';
	Core::filter();
	
	$notes = $db->query('SELECT * FROM notes ORDER BY id DESC');

	if (isset($_POST['addNote'])) {
		extract($_POST);
		$note = new Note($titre, $contenu, 0);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Note/notes.views.php';
?>