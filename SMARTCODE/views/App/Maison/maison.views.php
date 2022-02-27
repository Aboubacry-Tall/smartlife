<div class="container" id="app-img">
	<i class="fa fa-home fa-9x animated zoomInUp slower" id="icn" style="z-index: -1"></i>
	<div class="text-center">
		<h1 class="display-4 indigo-text text-uppercase">Maison</h1>
	</div>
	<form method="GET" action="http://192.168.">
		<div class="clearfix">
			<span class="fa-3x indigo-text">Ampoules</span>
			<span class="fa-3x indigo-text float-right"><i class="fas fa-lightbulb"></i></span>
		</div>
		<div class="row">
			<div class="col-3">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Chambre</b></h6>
						<div class="form-check">
							<input type="radio" id="on1" class="form-check-input" name="chambre" value="on">
							<label for="on1" class="form-check-label">Allumer</label>
							<input type="radio" id="off1" class="form-check-input" name="chambre" value="off">
							<label for="off1" class="form-check-label">Eteindre</label>
						</div>
						<span>Etat</span>
						<span class="float-right"><?= $etatL; ?></span>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Couloir</b></h6>
						<div class="form-check">
							<input type="radio" id="on2" class="form-check-input" name="couloir" value="on">
							<label for="on2" class="form-check-label">Allumer</label>
							<input type="radio" id="off" class="form-check-input" name="couloir" value="off">
							<label for="off2" class="form-check-label">Eteindre</label>
						</div>
						<span>Etat</span>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Garage</b></h6>
						<div class="form-check">
							<input type="radio" id="on3" class="form-check-input" name="garage" value="on">
							<label for="on3" class="form-check-label">Allumer</label>
							<input type="radio" id="off3" class="form-check-input" name="garage" value="off">
							<label for="off3" class="form-check-label">Eteindre</label>
						</div>
						<span>Etat</span>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Sejour</b></h6>
						<div class="form-check">
							<input type="radio" id="on4" class="form-check-input" name="sejour" value="on">
							<label for="on4" class="form-check-label">Allumer</label>
							<input type="radio" id="off5" class="form-check-input" name="sejour" value="off">
							<label for="off5" class="form-check-label">Eteindre</label>
						</div>
						<span>Etat</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<span class="fa-3x indigo-text">Portes</span>
			<span class="fa-3x indigo-text float-right"><i class="fa fa-door-open"></i></span>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card mb-2">
					<div class="card-body">
						<h6 style="z-index: 1000;"><b>Porte principale</b></h6>
						<div class="form-check">
							<input type="radio" id="on6" class="form-check-input" name="porteP" value="on">
							<label for="on6" class="form-check-label">Ouvrir</label>
							<input type="radio" id="off7" class="form-check-input" name="porteP" value="off">
							<label for="off7" class="form-check-label">Fermer</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card mb-2">
					<div class="card-body">
						<h6 style="z-index: 1000;"><b>Porte du garage</b></h6>
						<div class="form-check">
							<input type="radio" id="on8" class="form-check-input" name="porteG" value="on">
							<label for="on8" class="form-check-label">Ouvrir</label>
							<input type="radio" id="off9" class="form-check-input" name="porteG" value="off">
							<label for="off9" class="form-check-label">Fermer</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<span class="fa-3x indigo-text">Température</span>
			<span class="fa-3x indigo-text float-right"><i class="fa fa-thermometer-half"></i></span>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Bâtiment</b></h6>
						<span>Temperature</span>
						<span class="float-right"><?= $tempB; ?>°C</span><br>
						<span>Humidité</span>
						<span class="float-right"><?= $humiditeB; ?>%</span><br>
						<div class="form-check mt-2">
							<input type="radio" id="on8" class="form-check-input" name="ventiloB" value="on">
							<label for="on8" class="form-check-label">Ouvrir</label>
							<input type="radio" id="off9" class="form-check-input" name="ventiloB" value="off">
							<label for="off9" class="form-check-label">Fermer</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card mb-2">
					<div class="card-body">
						<h6><b>Chambre</b></h6>
						<span>Temperature</span>
						<span class="float-right"><?= $tempC; ?>°C</span><br>
						<span>Humidité</span>
						<span class="float-right"><?= $humiditeC; ?>%</span><br>
						<div class="form-check mt-2">
							<input type="radio" id="on8" class="form-check-input" name="ventiloC" value="on">
							<label for="on8" class="form-check-label">Ouvrir</label>
							<input type="radio" id="off9" class="form-check-input" name="ventiloC" value="off">
							<label for="off9" class="form-check-label">Fermer</label>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<span class="float-right">
				<button type="submit" class="float-right btn btn-indigo" value="go" name="go">
					GO
				</button>
			</span>
		</div>
	</form>
</div>