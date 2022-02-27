<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card mt-3 mb-3 animated zoomIn slow">
				<div class="card-body">
					<div class="text-center">
						<h3 class="indigo-text">Modifier la note</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" value="<?=$note->titre?>" id="titre" name="titre" class="form-control validate p-1">
							<label for="titre"><b>Titre</b></label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-marker prefix indigo-text fa-2x"></i>
							<textarea id="contenu" name="contenu" class="form-control md-textarea" required="">
							<?=$note->contenu?>	
							</textarea>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modNote">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>