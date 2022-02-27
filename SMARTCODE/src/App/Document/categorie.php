<?php  
	require 'Document.class.php';
	Core::filter();
	
	$id = $params['id'];

	$categorie = $db->prepare('SELECT * FROM documentcategories WHERE id=?',[$id],1);

	$documents = $db->prepare('SELECT * FROM documents WHERE documentcategories_id=?',[$id],2);

	if (isset($_POST['addDocument'])) {
		extract($_POST);
		if (!empty($_FILES)) {
			$nom_doc = $_FILES['document']['name'];
			$tmp_doc = $_FILES['document']['tmp_name'];
			$document = new Document($nom, $nom_doc, $tmp_doc, $id);
		}
	}

	if (isset($_POST['delete'])) {
		extract($_POST);
		Document::delCategorie($id);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	
	require '../views/Core/navbar.php';
	require '../views/App/Document/categorie.views.php';
?>