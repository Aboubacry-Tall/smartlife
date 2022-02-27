<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase"><?= $params['objet']; ?></h1>
	</div>

	<div class="row">
		<div class="col-sm-6 offset-3">
			<div class="card animated zoomIn slow">
				<div class="card-body">
					<?php if (isset($document)): ?>
						<div class="text-center">
							<h3 class="indigo-text">Modifier le document</h3>
						</div>
						<form method="post" data-parsley-validate autocomplete="off" enctype="multipart/form-data">
							<div class="md-form mb-2">
								<input type="text" id="nom" name="nom" class="form-control validate p-1" required="" value="<?=$document->nom?>">
								<label for="nom">Nom</label>
							</div>
							<div class="md-form">
								<input type="file" name="document" id="document" value="<?=$document->lien?>">
								<label for="document" class="mt-4">Document</label>
							</div>
							<div class="md-form d-flex justify-content-center">
								<button type="submit" class="btn btn-indigo" name="modDocument">
									valider
								</button>
							</div>
						</form>
					<?php elseif(isset($frais)): ?>
						<div class="text-center">
							<h3 class="indigo-text">Modifier le frais</h3>
						</div>
						<form method="post" data-parsley-validate autocomplete="off" enctype="multipart/form-data">
							<div class="md-form mb-2">
								<input type="text" id="nom" value="<?=$frais->nom?>" name="nom" class="form-control validate p-1" required="">
								<label for="nom">Nom</label>
							</div>
							<div class="md-form mb-2">
								<input type="text" id="prix" value="<?=$frais->prix?>" name="prix" class="form-control validate p-1" required="">
								<label for="prix">Prix</label>
							</div>
							<div class="md-form mb-2">
								<input type="date" id="date" value="<?=$frais->date?>" name="date" class="form-control validate p-1">
								<label for="date" class="mt-5">Date</label>
							</div>
							<div class="md-form d-flex justify-content-center">
								<button type="submit" class="btn btn-indigo" name="modFrais">
									valider
								</button>
							</div>
						</form>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>