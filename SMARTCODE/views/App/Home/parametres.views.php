<div class="container" id="app-img">
	<i class="fa fa-cog fa-9x animated zoomInUp slower" id="icn"></i>
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase mb-4">paramètre</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<div class="z-depth-1 alert-danger animated zoomInDown slow">
				<?= Core::viewMsg(); ?>
				<?= Core::viewErreurs(); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 offset-4">
			<div class="card bb mb-2 animated fadeInUp slow">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							<img src="<?=$admin->img?>" class="rounded rounded-circle" 
							width="200" height="200" style="cursor: pointer;" data-toggle="modal" data-target="#img">
							<p class="mt-3">
								<h5>
									<span class="btn btn-floating btn-indigo">
										<i class="fas fa-user mt-3"></i>
									</span><?= $admin->nom ?>
									<span class="ml-2">
										<i class="fa fa-pencil-alt indigo-text" data-toggle="modal" data-target="#nom" style="cursor: pointer;"></i>
									</span>
								</h5>
								<h5>
									<span class="btn btn-floating btn-indigo">
										<i class="fas fa-phone mt-3"></i>
									</span><?= $admin->numero ?>
									<span class="ml-2">
										<i class="fa fa-pencil-alt indigo-text" data-toggle="modal" data-target="#numero" style="cursor: pointer;"></i>
									</span>
								</h5>
								<h5>
									<span class="btn btn-floating btn-indigo">
										<i class="fas fa-envelope mt-3"></i>
									</span><?= $admin->email ?>
									<span class="ml-2">
										<i class="fa fa-pencil-alt indigo-text" data-toggle="modal" data-target="#modEmail" style="cursor: pointer;"></i>
									</span>
								</h5>
							</p>
						</div>
						<div class="col-6">
							<div class="text-right">
								<button class="btn btn-light" data-toggle="modal" 
									data-target="#modMdp">
									<i class="fas fa-lock mr-2 indigo-text"></i>Changer de mot passe
								</button>
								<a class="btn btn-light">
									<i class="fas fa-user-friends mr-2 indigo-text"></i>Contactez-nous
								</a>
								<a class="btn btn-light">
									<i class="fas fa-file mr-2 indigo-text"></i>conditions et Pol, de confidentialité
								</a>
								<button class="btn btn-light" data-toggle="modal" data-target="#info">
									<i class="fas fa-info-circle mr-2 indigo-text"></i>Info de l'application
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="modal fade" tabindex="-1" id="img" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<form method="post" data-parsley-validate autocomplete="off" enctype="multipart/form-data">
						<img src="<?=$admin->img?>" class="rounded rounded-circle"
							width="80" height="80">
						<div class="md-form mb-2">
							<input type="file" name="img" id="img">
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modImg">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="nom" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" value="<?=$admin->nom?>" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modNom">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="numero" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="numero" value="<?=$admin->numero?>" name="numero" class="form-control validate p-1" required="">
							<label for="numero">Numero de téléphone</label>
						</div>
						<div class="md-form mb-2">
							<input type="password" id="mdp" name="mdp" class="form-control validate p-1" required="">
							<label for="mdp">Mot de passe</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modNumero">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" id="modEmail" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="email" id="email" value="<?=$admin->email?>" name="email" class="form-control validate p-1" required="">
							<label for="email">Adresse E-mail</label>
						</div>
						<div class="md-form mb-2">
							<input type="password" id="mdp" name="mdp" class="form-control validate p-1" required="">
							<label for="mdp">Mot de passe</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modEmail">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="modMdp" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="text-center">
							<h2 class="indigo-text">Changer votre mot de passe</h2>
						</div>
						<div class="md-form mb-2">
							<input type="password" id="mdp" name="mdp" class="form-control validate p-1" required="">
							<label for="mdp">Ancien mot de passe</label>
						</div>
						<div class="md-form mb-2">
							<input type="password" id="mdp2" name="mdp2" class="form-control validate p-1" required="">
							<label for="mdp2">Nouveau mot de passe</label>
						</div>
						<div class="md-form mb-2">
							<input type="password" id="mdp3" name="mdp3" class="form-control validate p-1" required="" data-parsley-equalto="#mdp2">
							<label for="mdp3">confirmation de mot de passe</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modMdp">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" id="info" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content indigo">
				<div class="modal-body mx-3 indigo">
					<div class="text-center">
						<h1 class="display-2 white-text">SmartLife</h1>
						<h3 class="white-text">Version 1.0.1</h3>
						<div class="d-flex justify-content-center">
							<div class="rounded rounded-circle white text-center mt-3 mb-3" style="width: 120px;">
								<h1 class="display-1 indigo-text">S</h1>
							</div>
						</div>
						<h5 class="white-text">© 2018 2019 Araknet Inc</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>