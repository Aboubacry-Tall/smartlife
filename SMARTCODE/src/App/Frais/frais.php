<?php  
	require 'Frais.class.php';
	Core::filter();
	
	$frais = $db->query('SELECT * FROM frais ORDER BY id DESC');

	if (isset($_POST['addFrais'])) {
		extract($_POST);
		$frais = new Frais($nom, $prix, $date,0);
	}

	$total = 0;
	foreach ($frais as $frai) {
		$total = $total + $frai->prix;
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Frais/frais.views.php';
?>