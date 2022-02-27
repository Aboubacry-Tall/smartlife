<?php  

	class Projet{
		public  $erreurs = [];

		public function __construct($nom, $debut){
			if (mb_strlen($nom) < 2) {
				$this->erreurs [] = "Nom trop court (minimum 2 caractère)";
			}

			if (count($this->erreurs) == 0) {
				$db = new Database('smartlife');
				$db->prepare('INSERT INTO projets (nom, debut) VALUES (?,?)',[$nom, $debut]);
				Core::redirige('projets');
			}else{
				Core::sendErreurs($this->erreurs,'danger');
			}
		}

		public static function modifier($nom, $debut, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE projets SET nom=?, debut=? WHERE id=?',[$nom, $debut, $id]);
			Core::redirige('projet-'.$id);
		}

		public static function completer($description, $nom_doc=null, $tmp_doc=null, $id=null){
			if (!empty($nom_doc)) {
				$dest_doc = "docs/".$nom_doc;
				if (move_uploaded_file($tmp_doc, $dest_doc)) {
					$db = new Database('smartlife');
					$db->prepare('UPDATE projets SET description=?, document=? WHERE id=?',[$description,
						$dest_doc,$id]);
					Core::redirige('projet-'.$id);
				}else{
					Core::sendErreurs('Deplacement du document a echouer');
				}
			}else{
				$db = new Database('smartlife');
				$db->prepare('UPDATE projets SET description=? WHERE id=?',[$description,$id]);
				Core::redirige('projet-'.$id);
			}
		}

		public static function delete($id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM projets WHERE id=?',[$id]);
			$db->prepare('DELETE FROM taches WHERE projet_id=?',[$id]);
			$db->prepare('DELETE FROM soustaches WHERE projets_id=?',[$id]);
			$db->prepare('DELETE FROM membres WHERE projet_id=?',[$id]);
			Core::redirige('projets');
		}

		public static function addTache($nom, $id){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO taches (nom, projet_id) VALUES (?, ?)',[$nom, $id]);
			Core::redirige('projet-'.$id);
		}

		public static function addMembre($nom, $numero, $domaine, $id){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO membres (nom, numero, domaine, projet_id) VALUES (?,?,?,?)',[$nom, $numero, $domaine, $id]);
			Core::redirige('projet-'.$id);
		}

		public static function delMembre($id, $projet_id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM membres WHERE (id=? AND projet_id=?)',[$id, $projet_id]);
			Core::redirige('projet-'.$projet_id);
		}

		public static function addSousTache($nom, $th, $id){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO soustaches (nom, taches_id, projets_id) VALUES (?,?,?)',[$nom, $th, $id]);
			Core::redirige('tache-'.$id.'-'.$th);
		}

		public static function modTache($nom, $description, $th, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE taches SET nom=?, description=? WHERE (id=? AND projet_id=?)',[$nom, $description, $th, $id]);
			Core::redirige('tache-'.$id.'-'.$th);
		}

		public static function delTache($th, $id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM taches WHERE (id=? AND projet_id=?)',[$th, $id]);
			$db->prepare('DELETE FROM soustaches WHERE taches_id=?',[$th]);
			Core::redirige('projet-'.$id);
		}

		public static function demarer($i){
			$db = new Database('smartlife');
			$db->prepare('UPDATE soustaches SET etat=? WHERE id=?',[2, $i]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function arreter($i){
			$db = new Database('smartlife');
			$db->prepare('UPDATE soustaches SET etat=? WHERE id=?',[1, $i]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function termine($i){
			$db = new Database('smartlife');
			$db->prepare('UPDATE soustaches SET etat=? WHERE id=?',[3, $i]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function reply($i){
			$db = new Database('smartlife');
			$db->prepare('UPDATE soustaches SET etat=? WHERE id=?',[2, $i]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function del($i){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM soustaches WHERE id=?',[$i]);
			Core::redirige($_SESSION['page']['uri']);
		}

	}
?>