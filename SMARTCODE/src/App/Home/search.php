<?php  
	Core::filter();
	$objet = $params['objet'];
	$champ = null;

	if (isset($_POST['search'])) {
		$champ = 'ok';
		extract($_POST);

		if (!empty($searchbox)) {
			switch ($objet) {
				case 'contacts':
					$contacts = $db->query("SELECT * FROM contacts WHERE nom like '%$searchbox%'");
					break;
				case 'projets':
					$projets = $db->query("SELECT * FROM projets WHERE nom like '%$searchbox%'");
					break;
				case 'taches':
					$taches = $db->query("SELECT * FROM taches WHERE nom like '%$searchbox%'");
					break;
				case 'soustaches':
					$soustaches = $db->query("SELECT * FROM soustaches WHERE nom like '%$searchbox%'");
					break;		
				case 'evenements':
					$evenements = $db->query("SELECT * FROM evenements WHERE nom like '%$searchbox%'");
					break;
				case 'notes':
					$notes = $db->query("SELECT * FROM notes WHERE (contenu like '%$searchbox%' OR titre like '%$searchbox%')");
					break;	
				case 'documents':
					$documents = $db->query("SELECT * FROM documents WHERE nom like '%$searchbox%'");
					break;
				case 'frais':
					$frais = $db->query("SELECT * FROM frais WHERE nom like '%$searchbox%'");
					break;			
				default:
					# code...
					break;
			}
		}else{
			Core::sendMsg('la valeur est vide');
		}

	}
	
	require '../views/Core/navbar.php';
	require '../views/App/Home/search.views.php';
?>