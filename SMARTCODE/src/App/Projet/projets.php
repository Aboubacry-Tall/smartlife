<?php  
	require 'Projet.class.php';
	Core::filter();
	
	$projets = $db->query('SELECT * FROM projets ORDER BY id DESC');

	if (isset($_POST['addProjet'])) {
		extract($_POST);
		$projet = new Projet($nom, $debut);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Projet/projets.views.php';
?>