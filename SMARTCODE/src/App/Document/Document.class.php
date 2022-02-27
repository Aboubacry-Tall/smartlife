<?php  
	
	class Document{

		public function __construct($nom, $nom_doc, $tmp_doc, $id){
			$dest_doc = "docs/".$nom_doc;
			$date = date('Y-m-d');
			if (move_uploaded_file($tmp_doc, $dest_doc)) {
				$db = new Database('smartlife');
				$db->prepare('INSERT INTO documents (nom, lien, date, documentcategories_id) 
								VALUES (?,?,?,?)',[$nom, $dest_doc, $date, $id]);
				if ($id == 0) {
					Core::redirige('documents');
				}else{
					Core::redirige($_SESSION['page']['uri']);
				}
			}
		}

		public static function addCategorie($nom){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO documentcategories (nom) VALUES (?)',[$nom]);
			Core::redirige('categories-de-documents');
		}
	
		public static function delCategorie($id){
			$db = new Database('smartlife');
			$db->prepare('DELETE FROM documentcategories WHERE id=?',[$id]);
			$db->prepare('DELETE FROM documents WHERE documentcategories_id=?',[$id]);
			Core::redirige('categories-de-documents');
		}

	}
?>