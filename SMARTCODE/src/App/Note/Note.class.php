<?php  
	
	class note{
		public function __construct($titre=null, $contenu=null, $id=null){
			$date = date('Y-m-d');
			if (empty($id)) {
				$id = 0;
			}
			if (empty($titre) or $titre == null) {
				$titre = 'sans titre';
			}
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO notes (titre, contenu, date, notescategories_id) VALUES (?, ?, ?, ?)',[$titre, $contenu, $date, $id]);
			Core::redirige('notes');
		}

		public static function modNote($titre, $contenu, $id){
			$db = new Database('smartlife');
			$db->prepare('UPDATE notes SET titre=?, contenu=? WHERE id=?',[$titre, $contenu, $id]);
			Core::redirige('notes');
		}

		public static function addNoteCategories($nom){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO notescategories (nom) VALUES (?)',[$nom]);
			Core::redirige('notecategories');
		}
	}
?>