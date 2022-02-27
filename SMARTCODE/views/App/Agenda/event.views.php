<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase mt-2 mb-3">évènements</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card mt-4 mb-4 animated zoomInUp faster">
				<div class="card-body">
					<div class="text-center">
						<h3 class="indigo-text">Modifier l'événement</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" value="<?=$evenement->nom?>" name="nom" class="form-control validate p-1" 
								required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form mb-2">
							<input type="text" id="lieu" value="<?=$evenement->lieu?>" name="lieu" class="form-control validate p-1" 
								required="">
							<label for="lieu">Lieu</label>
						</div>
						<div class="form-row">
							<div class="md-form mb-2 col">
							<input type="date" id="debut" value="<?=$evenement->debut?>" name="debut" class="form-control validate p-1">
								<label for="debut" class="mt-5 ml-2 pl-1">Date du debut</label>
							</div>
							<div class="md-form mb-2 col">
								<input type="date" id="fin" value="<?=$evenement->fin?>" name="fin" class="form-control validate p-1">
								<label for="fin" class="mt-5 ml-2 pl-1">Date du fin</label>
							</div>
						</div>
						<div class="md-form">
							<i class="fa fa-pencil-alt prefix indigo-text"></i>
							<textarea name="note" id="note" class="form-control md-textarea">
								<?=$evenement->nom?>;
							</textarea>
							<label for="note"><b>Note</b></label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modEvenement">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>