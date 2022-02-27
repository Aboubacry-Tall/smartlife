<div class="container">
	<div class="text-center">
		<h1 class="display-1 indigo-text">Installation de SmartLife</h1>
	</div>
	<div class="row">
		<div class="col-6 offset-3">
			<div class="text-center">
				<h6 class="display-4">Configuration principale</h6>
			</div>
			<!-- //ETAPES-1 -->
			<form method="post" id="etape-1" class="animated zoomIn fast mt-3" autocomplete="off">
				<div class="text-center">
					<h4>Etape 1/3 : Informations Personnelle</h4>
				</div>
				<?= Core::viewErreurs(); ?>
				<?= Core::viewMsg(); ?>
				<div class="md-form mb-2">
					<input type="text" id="nom" name="nom" class="form-control" required="">
					<label for="nom">Nom de l'utlisateur</label>
				</div>
				<div class="md-form mb-2">
					<input type="email" id="email" name="email" class="form-control" required="">
					<label for="email">Adresse E-mail valide</label>
				</div>
				<div class="md-form mb-2">
					<input type="password" id="mdp" name="mdp" class="form-control" required="">
					<label for="mdp">Mot de passe de l'utilisateur</label>
				</div>
				<div class="md-form mb-2">
					<input type="password" id="mdp2" name="mdp2" class="form-control" required="">
					<label for="mdp2">Confirmer votre mot de passe</label>
				</div>
				<div class="text-right">
					<button type="submit" name="suivant-1" class="btn btn-indigo" id="suivant-1">Suivant
						<i class="fa fa-arrow-right ml-2"></i>
					</button>
				</div>
			</form>
			<!-- //ETAPES-2 -->
			<form method="post" id="etape-2" class="animated fadeInRight fast mt-3" style="display: none" autocomplete="off">
				<div class="text-center">
					<h4>Etape 2/3 : Paramètres de recupération</h4>
				</div>
				<?= Core::viewErreurs(); ?>
				<?= Core::viewMsg(); ?>
				<div class="md-form z-depth-1 p-2">
					Quel est nom de la première femme que tu a aimé ?
				</div>
				<div class="md-form mb-2">
					<input type="text" id="code" name="code" class="form-control" required="" autofocus="true">
					<label for="code"></label>
				</div>
				<div class="text-right">
					<button type="submit" name="suivant-2" class="btn btn-indigo" id="suivant-2">Suivant
						<i class="fa fa-arrow-right ml-2"></i>
					</button>
				</div>
			</form>
			<!-- //ETAPES-3 -->
			<form method="post" id="etape-3" class="animated fadeInRight fast mt-3" style="display: none" autocomplete="off">
				<div class="text-center">
					<h4>Etape 3/3 : Paramètres du système</h4>
				</div>
				<?= Core::viewErreurs(); ?>
				<?= Core::viewMsg(); ?>
				<div class="form-row">
					<div class="col-6 md-form mb-2">
						<input type="text" id="base" name="base" class="form-control">
						<label for="base">Nom de la base de données</label>
					</div>
					<div class="col-6 md-form mb-2">
						<input type="text" id="base" name="base" class="form-control">
						<label for="base">Nom du Serveur (localhost)</label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-6 md-form mb-2">
						<input type="text" id="base" name="base" class="form-control">
						<label for="base">Nom de l'utilisateur (root)</label>
					</div>
					<div class="col-6 md-form mb-2">
						<input type="text" id="base" name="base" class="form-control">
						<label for="base">Mot de passe</label>
					</div>
				</div>
				<div class="text-right">
					<button type="submit" name="terminer" class="btn btn-indigo" id="terminer">Terminer
						<i class="fa fa-arrow-right ml-2"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>