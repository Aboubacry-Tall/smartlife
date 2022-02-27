<div class="container" id="app-img">
	<i class="fa fa-shopping-cart fa-9x animated zoomInUp slower" id="icn"></i>
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase">Frais</h1>
	</div>
	<div class="clearfix mb-4">
		<span class=" float-right">
		  	<span class="z-depth-1 white p-2 fa-2x mr-3 bb">
		  		<b><?= number_format($total , 2,',',' ') ?> MRU</b>
		  	</span>
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#addFrais">
				<i class="fa fa-plus mt-3 ml-1"></i>
			</span>
		  	<span class="dropdown">
		  		<a class="btn-floating btn-indigo dropdown-toggle" 
				  	type="button" id="dropdownMenu6" data-toggle="dropdown"
				    aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mt-3 ml-1"></i>
			  	</a>
			  	<div class="dropdown-menu" aria-labelledby="dropdownMenu6">
				    <a class="dropdown-item" href="search-frais">
				    	<i class="fa fa-search mr-2"></i>Recherche
				    </a>
				    <a class="dropdown-item" href="categories-de-frais">
				    	<i class="fa fa-layer-group mr-2"></i>Afficher par categories
				    </a>
			  	</div>
		  	</span>
		</span>
	</div>
	<div class="row">
		<?php if (isset($frais) && count($frais) != 0): ?>
			<?php foreach ($frais as $frai): ?>
				<div class="col-12">
					<div class="z-depth-1 p-2 mb-3 white animated flipInX slower">
						<div class="clearfix">
							<span class="float-left">
								<b><?= $frai->nom ?> </b>
							</span>
							<span class="float-right" style="cursor: pointer;">
								<b class="mr-5"><?= $frai->prix ?> MRU</b>
								<?= $frai->date ?>
								<i class="fas fa-edit indigo-text fa-2x mr-2 ml-5" onclick="mod(<?= $frai->id?>)"></i>
								<i class="fas fa-trash pink-text fa-2x " onclick="del(<?= $frai->id?>)"></i>
							</span>
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
			MODAL D'AJOUT DE DOCUMENT
		************/ 
	?>
	<div class="modal fade" tabindex="-1" id="addFrais" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Ajouter un nouveau frais</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off" enctype="multipart/form-data">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" required="">
							<label for="nom"><b>Nom</b></label>
						</div>
						<div class="md-form mb-2">
							<input type="text" id="prix" name="prix" class="form-control validate p-1" required="">
							<label for="prix"><b>Prix</b></label>
						</div>
						<div class="md-form mb-2">
							<input type="date" id="date" name="date" class="form-control validate p-1">
							<label for="date" class="mt-5"><b>Date</b></label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addFrais">
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
		window.location.href = 'delete-frais-'+a;
	}

	function mod(a){
		window.location.href = 'change-frais-'+a;
	}
</script>