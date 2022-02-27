<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark indigo" style="margin-bottom: 70px">
	<a class="navbar-brand text-uppercase" href="/">smartlife</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
		data-target="#navbarSupportedContent-555"
		aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent-555">
		<ul class="navbar-nav animated zoomIn slow">
			<li class="nav-item">
				<a class="nav-link" href="contacts"><i class="fa fa-users mr-2"></i>Contacts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="projets"><i class="fa fa-project-diagram mr-2"></i>Projets</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="agenda"><i class="fa fa-calendar mr-2"></i>Agenda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="maison"><i class="fa fa-home mr-2"></i>Maison</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="notes"><i class="fa fa-sticky-note mr-2"></i>Note</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="documents"><i class="fa fa-folder-open mr-2"></i>Document</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="frais"><i class="fa fa-shopping-cart mr-2"></i>Frais</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="parametres"><i class="fa fa-cog mr-2"></i>Paramètre</a>
			</li>
			<?php if ($_SESSION['admin']): ?>
				<li class="nav-item active">
					<a class="nav-link" href="deconnexion"><i class="fa fa-user mr-2"></i>Deconnexion</a>
				</li>
			<?php endif ?>
		</ul>
	</div>
</nav>
<!--/.Navbar -->