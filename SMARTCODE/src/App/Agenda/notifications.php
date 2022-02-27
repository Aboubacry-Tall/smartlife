<?php  
	require 'Agenda.class.php';
	Core::filter();
	
	if (isset($_SESSION['evenement'])) {
		$ids = array_keys($_SESSION['evenement']);
	}

	if (empty($ids)) {
		$evenements = [];
	}else{
		$evenements = $db->query('SELECT * FROM evenements WHERE id IN ('.implode(',', $ids).')');
	}

	if (count($evenements) == 0) {
		unset($_SESSION['evenement']);
	}

	if (isset($_POST['addEvenement'])) {
		extract($_POST);
		Agenda::addEvenement($nom ,$lieu, $debut, $fin, $note);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Agenda/notifications.views.php';
?>