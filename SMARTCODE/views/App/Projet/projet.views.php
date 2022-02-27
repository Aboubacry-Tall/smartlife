<section id="header">
	<div class="container text-center">
		<h1 class="display-4 indigo-text text-uppercase">PROJET DE <?= $projet->nom ?></h1>
		<div class="clearfix">
			<span class=" float-right mr-5">
			  	<span class="dropdown">
			  		<a class="btn-floating btn-indigo dropdown-toggle" 
					  	type="button" id="dropdownMenu6" data-toggle="dropdown"
					    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mt-3 ml-1"></i>
				  	</a>
				  	<div class="dropdown-menu" aria-labelledby="dropdownMenu6">
					    <a class="dropdown-item" href="search-taches">
					    	<i class="fa fa-search mr-2"></i>Recherche
					    </a>
					    <a class="dropdown-item" data-toggle="modal" href="#informations">
					    	<i class="fas fa-pencil-alt mr-2"></i>Completer les informations
					    </a>
					    <a class="dropdown-item" data-toggle="modal" href="#modifier">
					    	<i class="fas fa-edit mr-2"></i>Modifier le projet
					    </a>
					    <a class="dropdown-item" data-toggle="modal" href="#delete">
					    	<i class="fas fa-trash pink-text mr-2"></i>Supprimer le projet
					    </a>
				  	</div>
			  	</span>
			</span>
		</div>
	</div>
</section>	
<section class="rotate indigo lighten-1 animated zoomIn fast">
	<div class="mt-6" style="padding:7rem;">
		<p class="w3-xlarge white-text text-center">
			<?= substr($projet->description, 0, 150); ?>
		</p>
		<div class="d-flex justify-content-center">
			<button class="btn btn-lg btn-white animated slideInLeft slow delay-1s"
			   data-toggle="modal" data-target="#description">Description</button>
			<a target="_blank" href="<?= $projet->document ?>" class="btn btn-lg btn-outline-white animated slideInRight slow delay-1s">cahier de charge</a>
		</div>
	</div>
</section>
<section id="taches" class="mt-5">
	<div class="container">
		<div class="text-center">
			<h1>Les taches</h1>
		</div>
		<div class="clearfix">
			<span class=" float-left">
				<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#tache">
					<i class="fa fa-plus mt-3"></i>
				</span>
				<b>Nouvelle tache</b>
			</span>
		</div>
		<div class="row">
			<?php if (isset($taches) && count($taches) != 0): ?>
				<?php foreach ($taches as $tache): ?>
					<div class="col-sm-3">
						<a href="tache-<?=$projet->id?>-<?=$tache->id?>">
							<div class="card animated zoomIn fast">
								<div class="card-body text-center">
									<h2 class="indigo-text"><?= $tache->nom ?></h2>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
	</div>
</section>

<section id="membres" class="grey lighten-3 mt-5">
	<div class="container">
		<div class="text-center">
			<h1 class="pt-4">Les membres</h1>
		</div>
		<div class="clearfix">
			<span class=" float-left">
				<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addMembre">
					<i class="fa fa-plus mt-3"></i>
				</span>
				<b>Nouveau membre</b>
			</span>
		</div>
		<div class="row">
			<?php if (isset($membres) && count($membres) != 0): ?>
				<?php foreach ($membres as $membre): ?>
					<div class="col-sm-3">
						<a class="btn bg-white mt-3 mb-4 animated zoomIn slower delay-3s m">
							<i class="fas fa-user mr-2"></i>
							<?= $membre->nom ?>
							<div class="clearfix mm" style="display: none">
								<span class="float-left">
									<?= $membre->numero ?> 
								</span>
								<span class="float-right ml-2">
									<?= $membre->domaine ?> 
									<i class="fas fa-trash pink-text ml-2" id="<?= $membre->id?>" 
									onclick="del(this.id);"></i>
								</span>
							</div>
						</a>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
	</div>
</section>

<div class="container">
	<?php
		/*********** 
			MODAL DE MODIFICATION DES INFOS DE BASE
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="modifier" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="d-flex justify-content-center indigo-text">
						<button type="button" class="btn btn-indigo btn-rounded fa-2x indigo-text">
							MODIFIER LE PROJET
						</button>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<i class="fas fa-project-diagram prefix indigo-text"></i>
							<input type="text" value="<?=$projet->nom?>" id="nom" name="nom" 
								class="form-control validate p-1">
							<label for="nom">Nom du projet</label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-clock prefix indigo-text"></i>
							<input type="date" value="<?=$projet->debut?>" id="debut" name="debut" 
								class="form-control validate p-1 mb-2">
							<label for="debut" class="mt-5">Date du projet</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modifier">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE DESCRIPTION
		************/ 
	?>
	<div class="modal fade" id="description" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<h2 class="indigo-text">Description du projet</h2>
					<p class="w3-large">
						<?= $projet->description; ?>
					</p>
					<p>
						<span class="float-right btn-floating indigo pl-3" data-toggle="modal" 
							data-target="#informations">
							<i class="fas fa-edit mt-3 white-text"></i>
						</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DES INFORMATIONS
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="informations" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Completer les informations</h3>
					</div>
					<form data-parsley-validate method="post" enctype="multipart/form-data" autocomplete="off">
						<div class="md-form mb-2">
							<i class="fas fa-pencil-alt prefix indigo-text"></i>
							<textarea name="description" id="description" class="form-control md-textarea">
								<?= $projet->description; ?>
							</textarea>
							<label for="description">Description du projet</label>
						</div>
						<div class="md-form mb-2">
							<input type="file" id="document" name="document" class="">
							<label for="document" class="mt-4 mb-2">Document du cahier de charge</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="completer">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE TACHES
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="tache" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Créer une tache</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addTache">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL D'AJOUT DE MEMBRE
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="addMembre" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Ajouter un membre</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom et prenom</label>
						</div>
						<div class="md-form mb-2">
							<input type="tel" id="numero" name="numero" class="form-control validate p-1" required="" data-parsley-minlength="8">
							<label for="numero">Numero de telephone</label>
						</div>
						<div class="md-form mb-2">
							<input type="text" id="domaine" name="domaine" class="form-control validate p-1" required="" value="developpeur" data-parsley-minlength="8">
							<label for="domaine">Specialite</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addMembre">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE SUPPRESSION DE MEMBRE
		************/ 
	?>
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body mx-2 text-center">
					<h3 class="indigo-text">Supprimer ?</h3>
					<form method="post" class="d-flex justify-content-center">
						<button class="btn btn-sm btn-indigo" data-dismiss="modal">Annuler</button>
						<button type="submit" name="delete" class="btn btn-sm btn-pink" >Supprimer</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	function del(a){
		window.location.href = 'projet-'+<?=$projet->id?>+'-'+a;
	}

</script>
