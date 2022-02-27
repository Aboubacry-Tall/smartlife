<?php  
	require 'Document.class.php';
	Core::filter();
	
	$categories = $db->query('SELECT * FROM documentcategories ORDER BY id DESC');
	
	if (isset($_POST['addCategorie'])) {
		extract($_POST);
		Document::addCategorie($nom);
	}


	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Document/categories.views.php';
?>