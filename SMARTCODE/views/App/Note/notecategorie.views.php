<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase">Notes - <?= $notescategorie->nom ?></h1>
	</div>
	<div class="clearfix">
		<span class=" float-right">
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addNote">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
		  	<span class="dropdown">
		  		<a class="btn-floating btn-indigo dropdown-toggle" 
				  	type="button" id="dropdownMenu6" data-toggle="dropdown"
				    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mt-3 ml-1"></i>
			  	</a>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenu6">
				    <a class="dropdown-item" href="search-notes">
				    	<i class="fa fa-search mr-2"></i>Recherche
				    </a>
				    <a class="dropdown-item" href="notecategories">
				    	<i class="fa fa-layer-group mr-2"></i>Afficher par categories
				    </a>
			  	</div>
		  	</span>
		</span>
	</div>
	<div class="row">
		<?php if (isset($notes) && count($notes) != 0): ?>
			<?php foreach ($notes as $note): ?>
				<div class="col-sm-3">
					<div class="card mb-3 animated zoomIn slow">
						<div class="card-body">
							<h5 class="pl-3"><b><?= $note->titre ?></b></h5>
							<p>
								<?= $note->contenu ?>
							</p>
							<div class="clearfix">
								<span class="float-right" style="cursor: pointer">
									<i class="fa fa-edit indigo-text fa-2x mr-2" onclick="mod(<?=$note->id?>)"></i>
									<i class="fa fa-trash pink-text fa-2x" onclick="del(<?=$note->id?>)"></i>
								</span>
							</div>
						</div>
					</div>
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
	<div class="modal fade" tabindex="-1" id="addNote" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Prendre de note</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="titre" name="titre" class="form-control validate p-1">
							<label for="titre"><b>Titre</b></label>
						</div>
						<div class="md-form mb-2">
							<i class="fas fa-marker prefix indigo-text fa-2x"></i>
							<textarea id="contenu" name="contenu" class="form-control md-textarea" required="">
								
							</textarea>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addNote">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
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
	function del(a){
		window.location.href = 'delete-note-'+a;
	}

	function mod(a){
		window.location.href = 'note-'+a;
	}
</script>