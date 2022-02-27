<?php
	Core::filter();
	  
	if(isset($_POST['etatL'])) 
		$etatL = $_POST['etatL'];
	else
		$etatL="";


	if(isset($_POST['etatC']))
		$etatC = $_POST['etatC'];
	else
		$etatC="";


	if(isset($_POST['etatG']))
		$etatG = $_POST['etatG'];
	else 
		$etatG = "";
	

	if(isset($_POST['etatP']))
		$etatP = $_POST['etatP'];
	else
		$etatP = "";


	if(isset($_POST['tempB']))
		$tempB = $_POST['tempB'];
	else
		$tempB = "";	

	if(isset($_POST['humiditeB']))
		$humiditeB = $_POST['humiditeB'];
	else
		$humiditeB = "";
	

	if(isset($_POST['tempC']))
		$tempC = $_POST['tempC'];
	else
		$tempC = "";	

	if(isset($_POST['humiditeC']))
		$humiditeC = $_POST['humiditeC'];
	else
		$humiditeC = "";	
	require '../views/Core/navbar.php';
	require '../views/App/Maison/maison.views.php';
?>