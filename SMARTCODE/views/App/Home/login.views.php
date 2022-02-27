<div class="container">
	<div class="text-center">
		<h1 class="display-1 indigo-text animated fadeIn slow">SMARTLIFE</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card animated zoomInUp slow">
				<div class="card-body text-center">
					<div class="z-depth-1 alert-danger animated zoomInDown slow">
						<?= Core::viewMsg(); ?>
						<?= Core::viewErreurs(); ?>
					</div>
					<i class="fa fa-user-circle fa-5x indigo-text"></i>
					<h2 class="display-4">Authentification</h2>
					<form data-parsley-validate method="post">
						<div class="md-form">
							<input type="password" class="form-control" autofocus="on" name="mdp" id="mdp" required="">
							<label for="mdp">Mot de passe</label>
						</div>
						<button class="btn btn-indigo" type="submit" name="connexion">
							Connexion<i class="fa fa-arrow-right ml-2"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>