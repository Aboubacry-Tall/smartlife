<?php  
	class Agenda{

		public static function addTodo($nom){
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO todo (nom, date) VALUES (?,?)',[$nom, date('Y-m-d')]);
			Core::redirige('agenda');
		}

		public static function addEvenement($nom, $lieu, $debut, $fin, $note){
			if (empty($debut)) {
				$debut = null;
			}
			if (empty($fin)) { 
				$fin = null;
			}
			$db = new Database('smartlife');
			$db->prepare('INSERT INTO evenements (nom, lieu, debut, fin, note) VALUES (?,?,?,?,?)',[$nom, $lieu, $debut, $fin, $note]);
			Core::redirige($_SESSION['page']['uri']);
		}

		public static function modEvenement($nom, $lieu, $debut, $fin, $note, $id){
			if (empty($debut)) {
				$debut = null;
			}
			if (empty($fin)) { 
				$fin = null;
			}
			$db = new Database('smartlife');
			$db->prepare('UPDATE evenements SET nom=?, lieu=?, debut=?, fin=?, note=? WHERE id=?',[$nom, $lieu, $debut, $fin, $note,$id]);
			Core::redirige($_SESSION['page']['uri']);
		}

			public static function getMois($mois){
			$moisAnnee = [
				'Janvier' => 1,
				'Fevrier' => 2,
				'Mars' => 3,
				'Avril' => 4,
				'Mai' => 5,
				'Juin' => 6,
				'Juillet' => 7,
				'Août' => 8,
				'Septembre' => 9,
				'Octobre' => 10,
				'Novembre' => 11,
				'Décembre' =>12
			];

			return $moisAnnee[$mois];
		}

		public static function calendrier($mois, $annee){

			if ($mois == null && $annee == null) {
				$mois = date('m');
				$annee = date('Y');
			}
			$jourJ = date('d');
			$moisAnnee = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

			$nombre_de_jours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

			?>

			<div class="clearfix agenda animated fadeIn slow">
				<span class="float-left">
					<?php 
						echo "<span class='fa-2x'>".$moisAnnee[$mois - 1]." </span>";
						echo "<span class='fa-2x'>".$annee."</span>";
					?>
				</span>
				<span class="float-right">
					<span class="btn-floating indigo" id="prec">
						<i class="fas fa-arrow-left mt-3 ml-3 white-text"></i>
					</span>
					<span class="btn-floating indigo" id="next">
						<i class="fas fa-arrow-right mt-3 ml-3 white-text"></i>
					</span>
				</span>
			</div>
			
			<table class="table table-md table-responsive-lg light agenda animated fadeIn slow">
				<tr class="thead w3-indigo white-text">
					<th>Lundi</th>
					<th>Mardi</th>
					<th>Mercredi</th>
					<th>Jeudi</th>
					<th>Vendredi</th>
					<th>Samedi</th>
					<th>Dimanche</th>
				</tr>

			<?php 
		
			for ($i=1; $i <= $nombre_de_jours ; $i++) { 
				$jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);
				$jour_semaine = JDDayOfWeek($jour);

				if ($i == $nombre_de_jours) {
					if ($jour_semaine == 1) {
						echo "<tr>";
					}
					
					if ($i == $jourJ) {
						echo '<td class="case fz-2">
						<a class="btn-floating btn-indigo pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
					</td></tr>';
					}else{
						echo '<td class="case fz-2">
						<a class="btn-floating btn-light pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
						</td></tr>';
					}
				}elseif ($i == 1) {
					echo "<tr>";
					if ($jour_semaine == 0) {
						$jour_semaine = 7;
					}

					for ($j=1; $j != $jour_semaine ; $j++) { 
						echo '<td></td>';
					}

					if ($i == $jourJ) {
						echo '<td class="case fz-2">
						<a class="btn-floating btn-indigo pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
						</td>';
					}else{
						echo '<td class="case fz-2">
						<a class="btn-floating btn-light pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
					</td>';
					}

					if ($jour_semaine == 7) {
						echo "</tr>";
					}
				}else{
					if ($jour_semaine == 1) {
						echo "<tr>";
					}

					if ($i == $jourJ) {
						echo '<td class="case fz-2">
						<a class="btn-floating btn-indigo pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
						</td>';
					}else{
						echo '<td class="case fz-2">
						<a class="btn-floating btn-light pt-3 pl-3" href="agenda-'.$i.'-'.$moisAnnee[$mois - 1].'-'.$annee.'">'.$i.'</a>
					</td>';
					}

					if ($jour_semaine == 0) {
						echo "</tr>";
					}
				}
			}

			echo "</table>";
		}
	}
?>