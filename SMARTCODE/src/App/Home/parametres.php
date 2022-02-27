<?php   
	require 'Home.class.php';
	Core::filter();
	
	$admin = $db->prepare('SELECT * FROM admin WHERE etat=?',[1],1);
	
	if (isset($_POST['modNom'])) {
		extract($_POST);
		Home::modNom($nom);
	}

	if (isset($_POST['modNumero'])) {
		extract($_POST);
		if ($admin->password == sha1($mdp)) {
			Home::modNumero($numero, $mdp);
		}else{
			Core::sendMsg('Mot de passe incorrect','danger');
		}
	}

	if (isset($_POST['modEmail'])) {
		extract($_POST);
		if ($admin->password == sha1($mdp)) {
			Home::modEmail($email, $mdp);
		}else{
			Core::sendMsg('Mot de passe incorrect','danger');
		}
	}

	if (isset($_POST['modMdp'])) {
		extract($_POST);
		if ($admin->password == sha1($mdp)) {
			if ($mdp2 === $mdp3) {
				Home::modMdp($mdp2);
			}else{
				Core::sendMsg('Le deux mot de passe de concordent pas!','danger');
			}
		}else{
			Core::sendMsg('Mot de passe incorrect','danger');
		}
	}

	if (isset($_POST['modImg'])) {
		extract($_POST);
		if (!empty($_FILES)) {
			$nom_img = $_FILES['img']['name'];
			$tmp_img = $_FILES['img']['tmp_name'];
			Home::modImg($nom_img, $tmp_img);
		}else{
			Core::sendMsg("Le fichier n'existe pas",'danger');
		}
	}

	$_SESSION['page']['uri'] = $_SERVER['REQUEST_URI'];
	require '../views/Core/navbar.php';
	require '../views/App/Home/parametres.views.php';
?>
