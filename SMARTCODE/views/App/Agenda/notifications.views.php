<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase mt-2 mb-3">évènements</h1>
	</div>
	<div class="clearfix">
		<span class=" float-right">
			<b>Nouvel événement</b>
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addEvenement">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
			<span class="dropdown">
		  		<a class="btn-floating btn-indigo dropdown-toggle" 
				  	type="button" id="dropdownMenu6" data-toggle="dropdown"
				    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mt-3 ml-1"></i>
			  	</a>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenu6">
				    <a class="dropdown-item" href="search-evenements">
				    	<i class="fa fa-search mr-2"></i>Recherche
				    </a>
				    <a href="evenements" class="dropdown-item">
				    	<i class="fas fa-layer-group mr-2"></i>tous les évènements
				    </a>
			  	</div>
		  	</span>
		</span>
	</div>
	<div class="row">
		<?php if (isset($evenements) && count($evenements) != 0): ?>
			<?php foreach ($evenements as $evenement): ?>
				<div class="col-sm-3">
					<div class="card animated fadeIn slow p-2 mb-3">
						<div class="card-body">
							<h4 class="indigo-text"><?= $evenement->nom ?></h4>
						<p>
							<?= $evenement->lieu ?>
						</p>
						<p>
							Debut : <?= $evenement->debut ?><br>
							Fin : <?= $evenement->fin ?>
						</p>
						<b class="w3-btn-floating indigo" data-toggle="collapse" 
							data-target="#note<?= $evenement->id ?>" style="cursor: pointer;">  
							<i class="fa fa-info white-text"></i>
						</b>
						<a href="event-<?=$evenement->id?>" class="w3-btn-floating grey lighten-1">  
							<i class="fa fa-edit white-text"></i>
						</a>
						<b class="w3-btn-floating pink" onclick="del(<?=$evenement->id?>)" style="cursor: pointer;">  
							<i class="fa fa-trash-alt white-text"></i>
						</b>
						<div class="collapse" id="note<?= $evenement->id ?>">
							<div class="p-3 grey lighten-3">
								<?= $evenement->note ?>
							</div>
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
			MODAL DE D'AJOUT DES EVENEMENTS
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="addEvenement" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-top" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Créer un événement</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" 
								required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form mb-2">
							<input type="text" id="lieu" name="lieu" class="form-control validate p-1" 
								required="">
							<label for="lieu">Lieu</label>
						</div>
						<div class="form-row">
							<div class="md-form mb-2 col">
							<input type="date" id="debut" name="debut" class="form-control validate p-1">
								<label for="debut" class="mt-5 ml-2 pl-1">Date du debut</label>
							</div>
							<div class="md-form mb-2 col">
								<input type="date" id="fin" name="fin" class="form-control validate p-1">
								<label for="fin" class="mt-5 ml-2 pl-1">Date du fin</label>
							</div>
						</div>
						<div class="md-form">
							<i class="fa fa-pencil-alt prefix indigo-text"></i>
							<textarea name="note" id="note" class="form-control md-textarea">
							
							</textarea>
							<label for="note"><b>Note</b></label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addEvenement">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function del(a){
		window.location.href = 'delete-evenements-'+a;
	}
</script>