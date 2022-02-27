<div class="container" id="app-img">
	<i class="fa fa-project-diagram fa-9x animated zoomInUp slower" id="icn"></i>
	<div class="text-center">
		<h1 class="display-4 indigo-text">PROJETS</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<div class="z-depth-1 alert-danger animated zoomInDown slow">
				<?= Core::viewMsg(); ?>
				<?= Core::viewErreurs(); ?>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<span class=" float-right">
			Nouveau projet
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#projet">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
			<span>
				<a class="btn btn-floating btn-indigo" href="search-projets">
					<i class="fa fa-search mt-3 ml-1"></i>
				</a>
			</span>
		</span>
	</div>
	<div class="container">
		<div class="row">
			<?php if (isset($projets) && count($projets) != 0): ?>
				<?php foreach ($projets as $projet): ?>
					<div class="col-sm-4">
						<div class="card log animated fadeIn slower">
						 	<div class="card-body text-center">
						 		<h4><?= $projet->nom ?></h4>
						 		<div class="d-flex justify-content-center">
						 			<a href="projet-<?= $projet->id ?>" class="btn btn-indigo">Demarrer</a>
						 		</div>
						 	</div>
						 </div>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="modal fade" tabindex="-1" id="projet" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="d-flex justify-content-center indigo-text">
						<button type="button" class="btn btn-indigo btn-rounded fa-2x indigo-text">
							AJOUTER UN PROJET
						</button>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<i class="fas fa-project-diagram prefix indigo-text"></i>
							<input type="text" id="nom" name="nom" class="form-control validate p-1" 
							required="" data-parsley-minlength="2">
							<label for="nom">Nom du projet</label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-clock prefix indigo-text"></i>
							<input type="date" id="debut" name="debut" class="form-control validate p-1"  data-parsley-trigger="change" required="">
							<label for="debut"></label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addProjet">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>