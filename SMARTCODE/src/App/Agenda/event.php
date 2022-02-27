<?php  
	require 'Agenda.class.php';
	Core::filter();
	
	$id = $params['id'];
	$evenement = $db->prepare('SELECT * FROM evenements WHERE id=?',[$id],1);
	
	if (isset($_POST['modEvenement'])) {
		extract($_POST);
		Agenda::modEvenement($nom, $lieu, $debut, $fin, $note, $id);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Agenda/event.views.php';
?>