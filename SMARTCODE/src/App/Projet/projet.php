<?php  
	require 'Projet.class.php';
	Core::filter();
	
	$id = $params['id'];

	$projet = $db->prepare('SELECT * FROM projets WHERE id=?',[$id],1);
	$taches = $db->prepare('SELECT * FROM taches WHERE projet_id=?', [$id], 2);
	$membres = $db->prepare('SELECT * FROM membres WHERE projet_id=?', [$id], 2);

	if (isset($params['m'])) {
		$m = $params['m'];
		Projet::delMembre($m, $id);
	}

	if (isset($_POST['completer'])) {
		extract($_POST);
		if (!empty($_FILES)) {
			$nom_doc = $_FILES['document']['name'];
			$tmp_doc = $_FILES['document']['tmp_name'];
			Projet::completer($description, $nom_doc, $tmp_doc, $id);
		}else{
			Projet::completer($description, null, null, $id);
		}
	}

	if (isset($_POST['modifier'])) {
		extract($_POST);
		Projet::modifier($nom, $debut, $id);
	}

	if (isset($_POST['addTache'])) {
		extract($_POST);
		Projet::addTache($nom, $id);
	}

	if (isset($_POST['addMembre'])) {
		extract($_POST);
		Projet::addMembre($nom, $numero, $domaine, $id);
	}

	if (isset($_POST['delete'])) {
		extract($_POST);
		Projet::delete($id);
	}

	require '../views/Core/navbar.php';
	require '../views/App/Projet/projet.views.php';
?> 