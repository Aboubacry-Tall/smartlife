<?php  
	require 'Projet.class.php';
	Core::filter();
	
	$id = $params['id'];
	$th = $params['th'];

	if (isset($params['m'])) {
		$methode = $params['m'];
		if ($methode == 'd') {
			Projet::demarer($params['i']);
		}elseif ($methode == 'a') {
			Projet::arreter($params['i']);
		}elseif ($methode == 't') {
			Projet::termine($params['i']);
		}elseif ($methode == 'r') {
			Projet::reply($params['i']);
		}elseif ($methode == 'e') {
			Projet::del($params['i']);
		}
	}

	$projet = $db->prepare('SELECT * FROM projets WHERE id=?', [$id],1);
	$tache = $db->prepare('SELECT * FROM taches WHERE id=?', [$th],1);
	$soustaches = $db->prepare('SELECT * FROM soustaches WHERE taches_id=?', [$th],2);

	$t1s = $db->prepare('SELECT * FROM soustaches WHERE (taches_id=? AND etat=?)', [$th,1],2);
	$t2s = $db->prepare('SELECT * FROM soustaches WHERE (taches_id=? AND etat=?)', [$th,2],2);
	$t3s = $db->prepare('SELECT * FROM soustaches WHERE (taches_id=? AND etat=?)', [$th,3],2);

	if (isset($_POST['addSousTache'])) {
		extract($_POST);
		Projet::addSousTache($nom, $th, $id);
	}

	if (isset($_POST['modTache'])) {
		extract($_POST);
		Projet::modTache($nom, $description, $th, $id);
	}

	if (isset($_POST['delete'])) {
		extract($_POST);
		Projet::delTache($th, $id);
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Projet/tache.views.php';
?>