<?php  
	require 'Home.class.php';
	Core::filter();
	
	$objets = $params['objet'];
	$id = $params['id'];
	
	$objet = $db->prepare("SELECT * FROM $objets WHERE id=?",[$id],1);

	switch ($objets) {
		case 'documents':
			$document = $objet;
			break;
		case 'frais':
			$frais = $objet;
			break;	
		
		default:
			# code...
			break;
	}

	if (isset($_POST['modDocument'])) {
		extract($_POST);
		if (!empty($_FILES)) {
			$nom_doc = $_FILES['document']['name'];
			$tmp_doc = $_FILES['document']['tmp_name'];
			Home::modDocument($nom, $nom_doc, $tmp_doc, $document->id);
		}else{
			Home::modDocument($nom, $document->id);
		}
	}

	if (isset($_POST['modFrais'])) {
		extract($_POST);
		Home::modFrais($nom, $prix, $date, $frais->id);
	}

	require '../views/Core/navbar.php';
	require '../views/App/home/change.views.php';
?>