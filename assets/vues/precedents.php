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
				<li><a href="<?php echo site_url('Precedents/index') ?>" class="active">Mes repas précédents</a></li>
				<li><a href="<?php echo site_url('Favoris/index') ?>">Mes favoris</a></li>
				<li><a href="<?php echo site_url('Compte/index') ?>">Mon compte</a></li>
			</ul>
		</div>

		<div class="contenu col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<table class="repas_precedents col-xs-10 col-sm-10 col-md-10 col-lg-10"><tr class="titre_categorie">
				<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><br><p>Date</p>
				</td>
				<td class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><p>Image</p></td>
				<td class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><p>Résumé</p></td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><p>Favori</p></td>
			</tr>
			<tr>
				<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<p class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:center">01/02/2018</p>
				</td>
				<td class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img style="width:80%"src="<?php echo base_url().'assets/Images/plat.jpg' ?>"></td>
				<td class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><p></p></td>
				<td class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<img onclick="Allumer(this)" id="etoile" style="width:100%" src="<?php echo base_url().'assets/Images/etoile.png' ?>">
				</td>
			</tr>
		</table>
		</div>

		<script type="text/javascript" src="JS/test.js"></script>

	</body>

	<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a>© Copyright 2017 - Ranto Ralijaona et Quentin Tenga - Tous droits réservés </a></footer>

</html>