<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Healthy Menus</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/CSS/style.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/CSS/bootstrap.min.css' ?>">
	</head>

	<header>
		<div id="deconnexion">
			<!--<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default bouton1">Déconnexion</button>
			</div>-->
			<button type="button" class="bouton1">Déconnexion</button>
		</div>
	</header>

	<body>

		

		<div class="nom page-header">
			<a style="color:black">HEALTHY</a><a style="color:red">MENUS</a>
		</div>
		

		<div class="navigation navbar navbar-default sticky-top col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<ul><li><a href="<?php echo site_url('Index/index') ?>">Demander un menu</a></li>
				<li><a href="<?php echo site_url('Precedents/index') ?>">Mes repas précédents</a></li>
				<li><a href="<?php echo site_url('Favoris/index') ?>" class="active">Mes favoris</a></li>
				<li><a href="<?php echo site_url('Compte/index') ?>">Mon compte</a></li>
			</ul>
		</div>

		<!-- Début du cadre blanc dans le cadre gris -->
		<div class="contenu col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="choisir col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<ul><li><a>Hier</a></li>
					<li><a>Avant hier</a></li>
					<li><a>Avant avant hier</a><li>
				</ul>
			</table>
		</div>

	</body>

	<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a>© Copyright 2017 - Ranto Ralijaona et Quentin Tenga - Tous droits réservés </a></footer>

</html>