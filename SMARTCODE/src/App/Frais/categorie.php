<?php  
	require 'Frais.class.php';
	Core::filter();
	
	$id = $params['id'];

	$categorie = $db->prepare('SELECT * FROM fraiscategories WHERE id=?',[$id],1);

	$frais = $db->prepare('SELECT * FROM frais WHERE fraiscategories_id=?',[$id],2);

	if (isset($_POST['addFrais'])) {
		extract($_POST);
		$frais = new Frais($nom, $prix, $date,$id);
	}


	if (isset($_POST['delete'])) {
		extract($_POST);
		Frais::delCategorie($id);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Frais/categorie.views.php';
?>