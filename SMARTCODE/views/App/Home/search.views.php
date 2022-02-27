<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text mb-3">RECHERCHER</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<form method="post" class="animated slideInRight fast" autocomplete="off">
				<div class="md-form input-group">
					<input type="search" id="searchbox" name="searchbox" class="form-control" autofocus="true">
					<button name="search" class="btn btn-sm btn-indigo" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
	<?php if (isset($contacts) && count($contacts) != 0): ?>
		<?php foreach ($contacts as $contact): ?>
			<div class="w3-card-2 white animated zoomIn fast mb-2">
				<a href="contact-<?=$contact->id?>">
					<div class="w3-container">
						<div class="clearfix">
							<span class="float-left">
								<b class="btn btn-floating btn-indigo"><i class="fa fa-user mt-3"></i></b>
								<strong class="black-text"><?= $contact->nom ?></strong>
							</span>
							<span class="float-right mt-5">
								<strong class="mr-3 black-text"><?= $contact->numero ?></strong>
								<strong><?= $contact->email ?></strong>
							</span>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	<?php elseif (isset($projets) && count($projets) != 0): ?>	
		<div class="row">
			<?php foreach ($projets as $projet): ?>
				<div class="col-sm-4">
					<div class="card log">
					 	<div class="card-body text-center">
					 		<h4><?= $projet->nom ?></h4>
					 		<div class="d-flex justify-content-center">
					 			<a href="projet-<?= $projet->id ?>" class="btn btn-indigo">Demarrer</a>
					 		</div>
					 	</div>
					 </div>
				</div>
			<?php endforeach ?>
		</div>
	<?php elseif(isset($taches) && count($taches) != 0): ?>
		<div class="row">
			<?php foreach ($taches as $tache): ?>
				<div class="col-sm-3">
					<a href="tache-<?=$tache->id?>">
						<div class="card animated zoomIn fast">
							<div class="card-body text-center">
								<h2 class="indigo-text"><?= $tache->nom ?></h2>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	<?php elseif(isset($soustaches) && count($soustaches) != 0): ?>
		<div class="row">
			<?php foreach ($soustaches as $soustache): ?>
				<div class="col-sm-3">
					<div class="z-depth-1 p-1 mb-2">
						<?= $soustache->nom ?>
						<div class="slg"></div>
					</div>
				</div>
			<?php endforeach ?>
		</div>		
	<?php elseif(isset($evenements) && count($evenements) != 0): ?>
		<div class="row">
			<?php foreach ($evenements as $evenement): ?>
				<div class="col-sm-3">
					<div class="card animated fadeIn slow p-2 mb-3">
						<div class="card-body">
							<h4 class="indigo-text"><?= $evenement->nom ?></h4>
						<p>
							<?= $evenement->lieu ?>
						</p>
						<p>
							Debut : <?= $evenement->debut ?><br>
							Fin : <?= $evenement->fin ?>
						</p>
						<b class="w3-btn-floating indigo" data-toggle="collapse" 
							data-target="#note<?= $evenement->id ?>" style="cursor: pointer;">  
							<i class="fa fa-info white-text"></i>
						</b>
						<a href="event-<?=$evenement->id?>" class="w3-btn-floating grey lighten-1">  
							<i class="fa fa-edit white-text"></i>
						</a>
						<b class="w3-btn-floating pink" onclick="del(<?=$evenement->id?>)" style="cursor: pointer;">  
							<i class="fa fa-trash-alt white-text"></i>
						</b>
						<div class="collapse" id="note<?= $evenement->id ?>">
							<div class="p-3 grey lighten-3">
								<?= $evenement->note ?>
							</div>
						</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>		
	<?php elseif(isset($notes) && count($notes) != 0): ?>
		<div class="row">
			<?php foreach ($notes as $note): ?>
				<div class="col-sm-3">
					<div class="card mb-3 animated zoomIn slow">
						<div class="card-body">
							<h5 class="pl-3"><?= $note->titre ?></h5>
							<p>
								<?= $note->contenu ?>
							</p>
							<div class="clearfix">
								<span class="float-right" style="cursor: pointer">
									<i class="fa fa-edit indigo-text fa-2x mr-2" onclick="mod(<?=$note->id?>)"></i>
									<i class="fa fa-trash pink-text fa-2x" onclick="del(<?=$note->id?>)"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	<?php elseif(isset($documents) && count($documents) != 0): ?>
		<div class="row">
			<?php foreach ($documents as $document): ?>
				<div class="col-12">
					<div class="z-depth-1 p-2 mb-3">
						<div class="clearfix">
							<span class="float-left">
								<a href="<?= $document->lien ?>" target="_blank" ><?= $document->nom ?></a>
							</span>
							<span class="float-right" style="cursor: pointer;">
								<?= $document->date ?>
								<i class="fas fa-edit indigo-text fa-2x mr-2 ml-4" onclick="mod(<?= $document->id?>)"></i>
								<i class="fas fa-trash pink-text fa-2x " onclick="del(<?= $document->id?>)"></i>
							</span>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>	
	<?php elseif(isset($frais) && count($frais) != 0): ?>	
		<div class="row">
			<?php foreach ($frais as $frai): ?>
				<div class="col-12">
					<div class="z-depth-1 p-2 mb-3 white animated flipInY slow">
						<div class="clearfix">
							<span class="float-left">
								<b><?= $frai->nom ?> </b>
							</span>
							<span class="float-right" style="cursor: pointer;">
								<b class="mr-5"><?= $frai->prix ?> MRU</b>
								<?= $frai->date ?>
								<i class="fas fa-edit indigo-text fa-2x mr-2 ml-5" onclick="mod(<?= $frai->id?>)"></i>
								<i class="fas fa-trash pink-text fa-2x " onclick="del(<?= $frai->id?>)"></i>
							</span>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	<?php elseif ($champ == 'ok') : ?>
		<div class="alert alert-info alert-dismissible fade show" role="alert">
			<p class="fa-2x">
				Resultat du recherche 0
			</p>			
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
	<?php endif ?>
</div>

<script type="text/javascript">
	function del(a){
		window.location.href = 'delete-frais-'+a;
	}

	function mod(a){
		window.location.href = 'change-frais-'+a;
	}
</script>