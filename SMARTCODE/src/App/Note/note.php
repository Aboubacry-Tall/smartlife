<?php  
	require 'Note.class.php';
	Core::filter();
	
	$id = $params['id'];
	$note = $db->prepare('SELECT * FROM notes WHERE id=?',[$id],1);

	if (isset($_POST['modNote'])) {
		extract($_POST);
		Note::modNote($titre, $contenu, $id);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Note/note.views.php';
?>