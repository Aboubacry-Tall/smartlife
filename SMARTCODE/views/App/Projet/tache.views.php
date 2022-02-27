<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase"><?=$tache->nom?> DE <?=$projet->nom?></h1>
	</div>
	<div class="clearfix">
		<span class=" float-right mr-5">
			<b>ajouter une sous-tache</b>
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#soustache">
				<i class="fa fa-plus mt-3"></i>
			</span>
		</span>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<div class="card mt-3 mb-3 animated fadeIn slow">
				<div class="card-header text-center">
					<h4 class="text-uppercase">à faire</h4>
				</div>
				<div class="card-body">
					<?php if (isset($t1s) && count($t1s) != 0): ?>
						<?php foreach ($t1s as $t1): ?>
							<div class="z-depth-1 p-2 mb-2">
								<?= $t1->nom ?>
								<div class="slg"></div>
								<div class="clearfix">
									<span class="float-right" style="cursor: pointer;">
										<i class="fas fa-play-circle fa-2x indigo-text ml-3" 
											onclick="play(<?=$projet->id?>,<?=$tache->id?>,<?=$t1->id?>)"></i>
										<i class="fas fa-trash fa-2x pink-text ml-3" 
											onclick="del(<?=$projet->id?>,<?=$tache->id?>,<?=$t1->id?>)"></i>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mt-3 mb-3 animated fadeIn slow">
				<div class="card-header text-center">
					<h4 class="text-uppercase">En-cours</h4>
				</div>
				<div class="card-body">
					<?php if (isset($t2s) && count($t2s) != 0): ?>
						<?php foreach ($t2s as $t2): ?>
							<div class="z-depth-1 p-2 mb-2">
								<?= $t2->nom ?>
								<div class="slg"></div>
								<div class="clearfix">
									<span class="float-right" style="cursor: pointer;">
										<i class="fas fa-pause-circle fa-2x indigo-text ml-3" 
											onclick="stop(<?=$projet->id?>,<?=$tache->id?>,<?=$t2->id?>)"></i>
										<i class="fas fa-check-circle fa-2x indigo-text ml-3" 
											onclick="termine(<?=$projet->id?>,<?=$tache->id?>,<?=$t2->id?>)"></i>	
										<i class="fas fa-trash fa-2x pink-text ml-3" 
											onclick="del(<?=$projet->id?>,<?=$tache->id?>,<?=$t2->id?>)"></i>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card mt-3 mb-3 animated fadeIn slow">
				<div class="card-header text-center">
					<h4 class="text-uppercase">terminés</h4>
				</div>
				<div class="card-body">
					<?php if (isset($t3s) && count($t3s) != 0): ?>
						<?php foreach ($t3s as $t3): ?>
							<div class="z-depth-1 p-2 mb-2">
								<?= $t3->nom ?>
								<div class="slg"></div>
								<div class="clearfix">
									<span class="float-right" style="cursor: pointer;">
										<i class="fas fa-reply-all fa-2x indigo-text ml-3" 
											onclick="reply(<?=$projet->id?>,<?=$tache->id?>,<?=$t3->id?>)"></i>
										<i class="fas fa-trash fa-2x pink-text ml-3" 
											onclick="del(<?=$projet->id?>,<?=$tache->id?>,<?=$t3->id?>)"></i>
									</span>
								</div>
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<?php
		/*********** 
			MODAL DE TACHES
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="soustache" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Créer une sous-tache</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addSousTache">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE DE MODIFICATION TACHES
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="modTache" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-top" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Modifier la tache</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" value="<?=$tache->nom?>" name="nom" class="form-control validate p-1" required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form">
							<i class="fas fa-marker indigo-text prefix"></i>
							<textarea id="description" name="description" class="form-control md-textarea">
								<?= $tache->description ?>
							</textarea>
							<label for="description">Description de la tache</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="modTache">
								valider
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE DESCRIPTION
		************/ 
	?>
	<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<h2 class="indigo-text">Description de la <?= $tache->nom; ?></h2>
					<p class="w3-large">
						<?= $tache->description; ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php
		/*********** 
			MODAL DE SUPPRESSION
		************/ 
	?>
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body mx-2 text-center">
					<h3 class="indigo-text">Supprimer ?</h3>
					<form method="post" class="d-flex justify-content-center">
						<button class="btn btn-sm btn-indigo" data-dismiss="modal">Annuler</button>
						<button type="submit" name="delete" class="btn btn-sm btn-pink" type="submit">Supprimer</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	function play(p, t, i){
		window.location.href = 'tache-'+p+'-'+t+'-'+i+'-d';
	}

	function stop(p, t, i){
		window.location.href = 'tache-'+p+'-'+t+'-'+i+'-a';
	}

	function termine(p, t, i){
		window.location.href = 'tache-'+p+'-'+t+'-'+i+'-t';
	}

	function reply(p, t, i){
		window.location.href = 'tache-'+p+'-'+t+'-'+i+'-r';
	}

	function del(p, t, i){
		window.location.href = 'tache-'+p+'-'+t+'-'+i+'-e';
	}
</script>