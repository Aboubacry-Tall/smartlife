<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text">GROUPES</h1>
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
			Nouveau groupen
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addGroupe">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
		</span>
	</div>
	<div class="row">
		<?php foreach ($groupes as $groupe): ?>
			<div class="col-3">
				<a href="groupe-<?= $groupe->id ?>">
					<div class="card mt-2 mb-2 animated fadeInUp slow">
						<div class="card-body">
							<span><i class="fa fa-user-friends fa-2x indigo-text mr-3"></i></span>
							<span class="fa-2x black-text"><?= $groupe->nom ?></span>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>


<div class="container">
	<?php
		/*********** 
			MODAL D'AJOUT DE CATEGORIE DE FRAIS
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="addGroupe" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Nouveau Groupe</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off" enctype="multipart/form-data">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom"><b>Nom</b></label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addGroupe">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

