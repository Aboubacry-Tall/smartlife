<?php  
	class Database{
		private $name;
		private $user;
		private $pass;
		private $host;
		private $pdo;

		public function __construct($name, $user='root', $pass='toor', $host='localhost'){
			$this->name = $name;
			$this->user = $user;
			$this->pass = $pass;
			$this->host = $host;
		}

		public function getPdo(){
			if ($this->pdo === null) {
				$pdo = new PDO('mysql:dbname='.$this->name.';host='.$this->host.'','root', 'toor');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo = $pdo;
			}

			return $this->pdo;
		}

		public function query($statement){
			$requete = $this->getPdo()->query($statement);
			$data = $requete->fetchAll(PDO::FETCH_OBJ);
			return $data;
		}

		public function prepare($statement, $value, $r=0){
			$requete = $this->getPdo()->prepare($statement);
			$requete->execute($value);
			$requete->setFetchMode(PDO::FETCH_OBJ);

			if ($r === 1) {
				$data = $requete->fetch();
				return $data;
			}else if ($r > 1) {
				$data = $requete->fetchAll();
				return $data;
			}
		}
	}
?>

<?php  
	//Code : 7110eda4d09e062aa5e4a390b0a572ac0d2c0220
	//etat : 1
?>