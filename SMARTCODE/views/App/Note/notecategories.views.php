<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase">catégorie de note</h1>
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
			Nouveau Catégorie
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addNoteCategories">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
		</span>
	</div>
	<div class="row">
		<?php if (isset($notecategories) && count($notecategories) != 0): ?>
			<?php foreach ($notecategories as $notecategorie): ?>
				<div class="col-3">
					<a href="notecategorie-<?= $notecategorie->id ?>">
						<div class="card mt-2 mb-2 animated fadeInUp slow">
							<div class="card-body">
								<span><i class="fa fa-sticky-note fa-2x indigo-text mr-3"></i></span>
								<span class="fa-2x black-text"><?= $notecategorie->nom ?></span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
</div>

<div class="container">
	<?php
		/*********** 
			MODAL DE TACHES 
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="addNoteCategories" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Créer un catégorie</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addNoteCategories">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>