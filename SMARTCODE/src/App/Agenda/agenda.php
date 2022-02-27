<?php  
	require 'Agenda.class.php';
    Core::filter();
	$todos = $db->query('SELECT * FROM todo');

	if (isset($_POST['addTodo'])) {
		extract($_POST);
		Agenda::addTodo($nom);
	}
	
	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Agenda/agenda.views.php';
?>