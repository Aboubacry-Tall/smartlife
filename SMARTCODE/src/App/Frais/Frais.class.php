<?php  

	class Frais{

		public function __construct($nom, $prix, $date, $id=0){
			if (empty($date)) {
				$date = date('Y-m-d');
			}
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO frais (nom, prix, date, fraiscategories_id) VALUES (?,?,?,?)',[$nom, $prix, $date,$id]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function addCategorie($nom){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO fraiscategories (nom) VALUES (?)',[$nom]);
			Core::redirige('categories-de-frais');
		}
	
		public static function delCategorie($id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM fraiscategories WHERE id=?',[$id]);
			$db->prepare('DELETE FROM frais WHERE fraiscategories_id=?',[$id]);
			Core::redirige('categories-de-frais');
		}
	} 

?>