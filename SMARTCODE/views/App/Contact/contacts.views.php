<div class="container" id="app-img">
	<i class="fa fa-users fa-9x animated zoomInUp slower" id="icn"></i>
	<div class="text-center">
		<h1 class="display-4 indigo-text">CONTACTS</h1>
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
			<b>Nouveau contact</b>
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#contact">
				<i class="fa fa-user-plus mt-3 ml-1"></i>
			</span>
		  	<span class="dropdown">
		  		<a class="btn-floating btn-indigo dropdown-toggle" 
				  	type="button" id="dropdownMenu6" data-toggle="dropdown"
				    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mt-3 ml-1"></i>
			  	</a>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenu6">
				    <a class="dropdown-item" href="search-contacts">
				    	<i class="fa fa-search mr-2"></i>Recherche
				    </a>
				    <a class="dropdown-item" href="favoris">
				    	<i class="fa fa-users mr-2"></i>Favoris
				    </a>
				    <a class="dropdown-item" href="groupes">
				    	<i class="fa fa-user-friends mr-2"></i>Afficher par groupe
				    </a>
			  	</div>
		  	</span>
		</span>
	</div>
	<?php foreach ($contacts as $contact): ?>
		<div class="w3-card-2 white animated zoomIn fast mb-2">
			<a href="contact-<?=$contact->id?>">
				<div class="w3-container">
					<div class="clearfix">
						<span class="float-left">
							<b class="btn btn-floating btn-indigo"><i class="fa fa-user mt-3"></i></b>
							<strong class="black-text"><?= $contact->nom ?></strong>
						</span>
						<span class="float-right mt-5">
							<strong class="mr-3 black-text"><?= $contact->numero ?></strong>
							<strong><?= $contact->email ?></strong>
						</span>
					</div>
				</div>
			</a>
		</div>
	<?php endforeach ?>
</div>


<div class="container">
	<div class="modal fade" tabindex="-1" id="contact" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="d-flex justify-content-center indigo-text">
						<button type="button" class="btn btn-light btn-rounded fa-2x indigo-text">
							AJOUTER UN CONTACT
						</button>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<i class="fas fa-user prefix indigo-text"></i>
							<input type="text" id="nom" name="nom" class="form-control validate p-1" 
							required="" data-parsley-minlength="2">
							<label for="nom">Nom et Prenom</label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-phone prefix indigo-text"></i>
							<input type="text" id="numero" name="numero" class="form-control validate p-1" required="" data-parsley-trigger="change" data-parsley-minlength="8">
							<label for="numero">Numero de t??l??phone</label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-envelope prefix indigo-text"></i>
							<input type="email" id="email" name="email" class="form-control validate p-1" required="" data-parsley-trigger="change">
							<label for="email">Adresse email</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addContact">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>