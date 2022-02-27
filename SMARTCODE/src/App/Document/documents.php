<?php  
	require 'Document.class.php';
	Core::filter();
	
	$documents = $db->query('SELECT * FROM documents order BY id DESC');

	if (isset($_POST['addDocument'])) {
		extract($_POST);
		if (!empty($_FILES)) {
			$nom_doc = $_FILES['document']['name'];
			$tmp_doc = $_FILES['document']['tmp_name'];
			$document = new Document($nom, $nom_doc, $tmp_doc, 0);
		}
	}



	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Document/documents.views.php';
?>