<div class="container">
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase">agenda</h1>
	</div>
	
	<div class="row">
		<div class="col-sm-4">
			<span class="btn btn-floating btn-indigo" data-toggle="modal" data-target="#todo">
				<i class="fa fa-plus mt-3"></i>
			</span>
			Nouveau tache
			<div class="card mt-3 mb-3 bb animated fadeIn">
				<div class="card-body">
					<div class="text-center">
						<h4 class="text-uppercase">Taches</h4>
					</div>
					<?php if (isset($todos) && count($todos) != 0): ?>
						<?php foreach ($todos as $todo): ?>
							<div class="alert w3-card-2 w3-light-grey fade show" id="tache">
									<span class="float-right close pink-text" 
										onclick="del(<?= $todo->id ?>)" style="cursor: pointer;">
										&times;
									</span>
									<p><?= $todo->nom ?></p>
								</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="col-sm-8">
			<?php if (isset($_SESSION['evenement'])): ?>
				<a href="notifications" class="btn btn-floating pink animated infinite pulse" data-toggle="tooltip" data-placement="top" title="événements proches">
					<i class="fa fa-bell mt-3 white-text"></i>
				</a>
			<?php else: ?>
				<div class="mt-5 pt-4"></div>
			<?php endif ?>
			<div class="card mt-3 mb-3 bb">
				<div class="card-body">
					<div class="text-center">
						<h4 class="text-uppercase">Calendrier</h4>
					</div>
					
					<div id="agenda">
						 <?php Agenda::calendrier(date('m'), date('Y')); ?>
					</div>
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
	<div class="modal fade" tabindex="-1" id="todo" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-top" role="document">
			<div class="modal-content">
				<div class="modal-body mx-3">
					<div class="text-center">
						<h3 class="indigo-text">Créer une tache</h3>
					</div>
					<form method="post" data-parsley-validate autocomplete="off">
						<div class="md-form mb-2">
							<input type="text" id="nom" name="nom" class="form-control validate p-1" 
								required="">
							<label for="nom">Nom</label>
						</div>
						<div class="md-form d-flex justify-content-center">
							<button type="submit" class="btn btn-indigo" name="addTodo">
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
		window.location.href = 'delete-todo-'+a;
	}
</script>