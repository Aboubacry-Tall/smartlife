<?php  
	require 'Agenda.class.php';
	Core::filter();
	
	$j = $params['j'];
	$m = Agenda::getMois($params['m']);
	$a = $params['a'];

	$evenements = $db->prepare('SELECT * FROM evenements 
		WHERE ((DAY(debut)=? AND MONTH(debut)=? AND YEAR(debut)=?) OR 
				(DAY(fin)=? AND MONTH(fin)=? AND YEAR(fin)=?))',[$j, $m, $a, $j, $m, $a],2);


	if (isset($_POST['addEvenement'])) {
		extract($_POST);
		Agenda::addEvenement($nom ,$lieu, $debut, $fin, $note);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Agenda/evenement.views.php';
?>