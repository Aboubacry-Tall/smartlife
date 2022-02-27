<?php  
	$objets = $params['objet'];
	$id = $params['id'];
	
	$db->prepare("DELETE FROM $objets WHERE id=?",[$id]);
	Core::redirige($_SESSION['page']['uri']);
?>