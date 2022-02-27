<?php  

	class Contact{
		private $nom;
		private $numero;
		private $email;
		public  $erreurs = [];

		public function __construct($nom, $numero, $email, $id=null){
			if (mb_strlen($nom) < 2) {
				$this->erreurs [] = "Nom trop court (minimum 2 caractère)";
			}

			if (mb_strlen($numero) < 8) {
				$this->erreurs [] ="Numero de téléphone invalide (minimum 8 chiffres)";
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$this->erreurs[] ="Adrress email invalide!";
			}

			if (count($this->erreurs) == 0) {
				$db = new Database('smartlife');
				
				if (isset($id)) {
					$db->prepare('INSERT INTO contacts (nom, numero, email, groupes_id) VALUES (?,?,?,?)',[$nom,$numero,$email, $id]);
					Core::redirige('groupe-'.$id);
				}else{
					$db->prepare('INSERT INTO contacts (nom, numero, email) VALUES (?,?,?)',[$nom,$numero,$email]);
					Core::redirige('contacts');
				}
			}else{
				Core::sendErreurs($this->erreurs,'danger');
			}
		}

		public static function completer($fixe, $fonction, $ville, $apropos, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE contacts SET fixe=?, fonction=?, ville=?, apropos=? WHERE id=?',[$fixe, $fonction, $ville, $apropos, $id]);
			Core::sendMsg("L'operation a reussi",'primary');
			Core::redirige('contact-'.$id);
		}

		public static function modifier($nom, $numero, $email, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE contacts SET nom=?, numero=?, email=? WHERE id=?',[$nom, $numero, $email, $id]);
			Core::sendMsg("L'operation a reussi",'primary');
			Core::redirige('contact-'.$id);
		}

		public static function delete($id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM contacts WHERE id=?',[$id]);
			Core::sendMsg("L'operation a reussi",'primary');
			Core::redirige('contacts');
		}

		public static function favoris($id, $etat){
			$db = new Database('smartlife');
			$db->prepare('UPDATE contacts SET etat=? WHERE id=?',[$etat, $id]);
			Core::sendMsg("L'operation a reussi",'primary');
			Core::redirige('contact-'.$id);
		}

		public static function addGroupe($nom){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO groupes (nom) VALUES (?)',[$nom]);
			Core::redirige('groupes');
		}

		public static function modGroupe($nom, $id){
			$db = new Database('smartlife');
			$db->prepare("UPDATE groupes SET nom=? WHERE id=?",[$nom, $id]);
			Core::redirige('groupe-'.$id);
		}

		public static function delGroupe($id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM groupes WHERE id=?',[$id]);
			Core::redirige('groupes');
		}
	}
?>