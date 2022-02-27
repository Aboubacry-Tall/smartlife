<?php  

	require 'Agenda.class.php';

	$mois = $params['mois'];
	$annee = $params['annee'];

	Agenda::calendrier($mois, $annee);
	

?>