<?php  
	require 'Agenda.class.php';
	Core::filter();
	
	$evenements = $db->query('SELECT * FROM evenements ORDER BY id DESC');

	if (isset($_POST['addEvenement'])) {
		extract($_POST);
		Agenda::addEvenement($nom ,$lieu, $debut, $fin, $note);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Agenda/evenements.views.php';
?>