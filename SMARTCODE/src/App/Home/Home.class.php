<?php   
	
	class Home{
		public static function modDocument($nom, $nom_doc=null, $tmp_doc=null, $id=null){
			$dest_doc = "docs/".$nom_doc;
			$date = date('Y-m-d');
			if (move_uploaded_file($tmp_doc, $dest_doc)) {
				$db = new Database('smartlife');
				$db->prepare('UPDATE documents SET nom=?, lien=?, date=? WHERE id=?',[$nom, $dest_doc, $date, $id]);
				Core::redirige($_SESSION['page']['uri']);
			}else{
				$db = new Database('smartlife');
				$db->prepare('UPDATE documents SET nom=?, date=? WHERE id=?',[$nom, $date, $id]);
				Core::redirige($_SESSION['page']['uri']);
			}
		}

		public static function modFrais($nom, $prix, $date, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE frais SET nom=?, prix=?, date=? WHERE id=?',[$nom, $prix, $date, $id]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function modNom($nom){
			$db = new Database('smartlife');
			$db->prepare('UPDATE admin SET nom=? WHERE etat=?',[$nom, 1]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function modNumero($numero, $mdp){
			$db = new Database('smartlife');
			$admin = $db->prepare('SELECT * FROM admin WHERE etat=?',[1],1);
			if ($admin->password == sha1($mdp)) {
				$db->prepare('UPDATE admin SET numero=? WHERE etat=?',[$numero, 1]);
				Core::redirige($_SESSION['page']['uri']);
			}else{
				Core::sendMsg('Veuillez réessayer de nouveau','danger');
			}
			
		}

		public static function modEmail($email, $mdp){
			$db = new Database('smartlife');
			$admin = $db->prepare('SELECT * FROM admin WHERE etat=?',[1],1);
			if ($admin->password == sha1($mdp)) {
				$db->prepare('UPDATE admin SET email=? WHERE etat=?',[$email, 1]);
				Core::redirige($_SESSION['page']['uri']);
			}else{
				Core::sendMsg('Veuillez réessayer de nouveau','danger');
			}
		}

		public static function modMdp($mdp2){
			$db = new Database('smartlife');
			$admin = $db->prepare('SELECT * FROM admin WHERE etat=?',[1],1);
			$mdp2 = sha1($mdp2);
				$db->prepare('UPDATE admin SET password=? WHERE etat=?',[$mdp2, 1]);
				Core::sendMsg('Le traitement a reussi');
				Core::redirige($_SESSION['page']['uri']);
		}

		public static function modImg($nom_img, $tmp_img){
			$db = new Database('smartlife');
			$dest_img = "img/".$nom_img;
			if (move_uploaded_file($tmp_img, $dest_img)) {
				$db->prepare('UPDATE admin SET img=? WHERE etat=?',[$dest_img, 1]);
				Core::redirige($_SESSION['page']['uri']);
			}
		}

		public static function login($mdp){
			$db = new Database('smartlife');
			$admin = $db->prepare('SELECT * FROM admin WHERE etat=?',[1],1);
			if ($admin->password == sha1($mdp)) {
				$_SESSION['admin'] = $admin->code;
				Core::redirige('/');
			}else{
				Core::sendMsg('Veuillez réessayer de nouveau');
			}
		}
	}	
?>