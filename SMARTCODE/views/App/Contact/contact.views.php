<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<div class="z-depth-1 mt-3 animated zoomIn fast">
				<?= Core::viewMsg(); ?>
				<?= Core::viewErreurs(); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="card w3-animate-zoom">
				<div class="card-body text-center">
					<span>
						<i class="fa fa-user-circle fa-7x indigo-text mt-5"></i>
					</span>
					<p class="mt-4">
						<h6><strong><?= $contact->nom ?></strong></h6>
						<button class="w3-btn btn-indigo w3-round-xlarge text-uppercase"><?= $contact->fonction ?></button>
					</p>
					<p>
						<?= $contact->numero ?> / <?= $contact->fixe ?> <br>
						<?= $contact->email ?> <br>
						<?= $contact->ville ?>, Mauritanie <br>
					</p>
					<p class="mb-1">
						<form method="post">
							<b class="btn-floating btn-light" title="mettre en favoris" 
								onclick="favoris(<?=$contact->etat?>);">
								<i class="fab fa-start mt-3 indigo-text"></i>
							</b>
							<a href="facebook.com" class="btn-floating btn-light">
								<i class="fab fa-facebook-f mt-3 indigo-text"></i>
							</a>
							<a href="#" class="btn-floating btn-pink" data-toggle="modal" 
								data-target="#confirmer">
								<i class="fa fa-trash mt-3 white-text"></i>
							</a>
						</form>
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card w3-animate-zoom">
				<div class="card-body">
					<div class="nav nav-pills text-center justify-content-center">
						<button class="btn btn-sm btn-indigo l-1" data-target="#completer" 
							data-toggle="pill" aria-selected="true">completer
						</button>
						<button class="btn btn-sm btn-light l-1" data-target="#modifier" 
							data-toggle="pill" aria-selected="false">
							modifier
						</button>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade show active" id="completer" role="tabpanel">
							<form method="post" autocomplete="off">
								<div class="md-form">
									<input type="tel" value="<?=$contact->fixe?>" id="fixe" name="fixe" class="form-control">
									<label for="fixe">Téléphone fixe</label>
								</div>
								<div class="md-form">
									<input type="text" value="<?=$contact->fonction?>" id="fonction" name="fonction" class="form-control">
									<label for="fonction">Fonction</label>
								</div>
								<div class="md-form">
									<input type="text" value="<?=$contact->ville?>" id="ville" name="ville" class="form-control">
									<label for="ville">Ville</label>
								</div>
								<div class="md-form">
									<textarea name="apropos" id="apropos" class="form-control md-textarea">
										<?=$contact->apropos?>
									</textarea>
									<label for="apropos">Apropos</label>
								</div>
								<div class="md-form mb-2 d-flex justify-content-center">
									<button type="submit" class="btn btn-sm btn-indigo l-1" name="completer">
										<i class="fa fa-save mr-2"></i>Enregister
									</button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="modifier" role="tabpanel">
							<form method="post" data-parsley-validate autocomplete="off">
								<div class="md-form">
									<input type="text" value="<?=$contact->nom?>" id="nom" name="nom" class="form-control" data-parsley-minlength="2" required="">
									<label for="nom">Nom et Prénom</label>
								</div>
								<div class="md-form">
									<input type="text" value="<?=$contact->numero?>" id="numero" name="numero" class="form-control" data-parsley-minlength="8">
									<label for="numero">Téléphone portable</label>
								</div>
								<div class="md-form">
									<input type="email" value="<?=$contact->email?>" id="email" name="email" class="form-control">
									<label for="email">E-mail</label>
								</div>
								<div class="md-form">
									<button type="submit" class="btn btn-sm btn-indigo l-1" name="modifier">
										<i class="fa fa-save mr-2"></i>Enregister
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card w3-animate-zoom">
				<div class="card-body text-center">
					<span class="card-title indigo-text mb-2">A propos</span>
					<p class="w3-light-grey p-2">
						<?= $contact->apropos ?>
					</p>
					<hr>
					<span class="card-title indigo-text mb-2">Mail</span>
					<form>
						<div class="md-form">
							<input type="text" id="objet" name="objet" class="form-control">
							<label for="objet">Objet</label>
						</div>
						<div class="md-form">
							<textarea id="contenu" name="contenu" class="md-textarea form-control">
								
							</textarea>
							<label for="contenu">Message</label>
						</div>
						<div class="md-form mb-2">
							<button type="submit" class="btn btn-sm btn-indigo l-1">
								<i class="fa fa-paper-plane mr-2"></i>Envoyer
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="modal fade" id="confirmer" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body mx-2 text-center">
					<h3 class="indigo-text">Supprimer ?</h3>
					<form method="post" class="d-flex justify-content-center">
						<button class="btn btn-sm btn-indigo" data-dismiss="modal">Annuler</button>
						<button type="submit" name="delete" class="btn btn-sm btn-pink">Supprimer</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function favoris(a){
		if (a == 0) {
			window.location.href = 'contact-'+a+'-1';
		}else{
			window.location.href = 'contact-'+a+'-0';
		}
	}
</script>