<?php  
	require 'Frais.class.php';
	Core::filter();
	
	$categories = $db->query('SELECT * FROM fraiscategories ORDER BY id DESC');
	
	if (isset($_POST['addCategorie'])) {
		extract($_POST);
		Frais::addCategorie($nom);
	}


	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Frais/categories.views.php';
?>