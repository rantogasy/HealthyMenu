<!-- Permet d'afficher les informations du compte fraîchement créé -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Healthy Menus</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/CSS/style.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/CSS/bootstrap.min.css' ?>">
	</head>

	<body>
		<header>
			<div id="deconnexion">
				<?php echo validation_errors(); ?>
				<?php echo form_open('Inscription/connexion',array()); ?>
					<input type="submit" value="Déconnexion" style="background-color:#850606; color:white; font-weight:bold; float:right; line-height:45px; margin-right:2%">
				<?php echo form_close(); ?>
			</div>
		</header>
		<div class="nom page-header">
			<a style="color:black">HEALTHY</a><a style="color:red">MENUS</a>
		</div>
		<div class="navigation navbar navbar-default sticky-top col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<ul>
				<li><a href="<?php echo site_url('Index/index') ?>">Demander un menu</a></li>
				<li><a href="<?php echo site_url('Precedents/index') ?>">Mes repas précédents</a></li>
				<li><a href="<?php echo site_url('Favoris/index') ?>">Mes favoris</a></li>
				<li><a href="<?php echo site_url('Compte/index') ?>" class="active">Mon compte</a></li>
			</ul>
		</div>

		
		<div class="contenu col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
			<!-- Début du cadre blanc dans le cadre gris -->
			<div class="contenant col-xs-10 col-sm-10 col-md-10 col-lg-10"><br>
				<div class="felicitations"><a>Félicitations <?php echo $prenom; ?> <?php echo $nom ?> ! Votre compte est créé !</a></div>
				<ul><li class="infos">Mon nom : <?php echo $nom; ?></li>
					<li class="infos">Mon prénom : <?php echo $prenom; ?></li>
					<li class="infos">Mon adresse mail : <?php echo $email; ?></li>
					<li class="infos">Mes allergies : <?php echo $allergies; ?></li>
				</ul>
			</div>
		</div>
		
		
	
	</body>
	<footer class="fixed-bottom col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a>© Copyright 2017 - Ranto Ralijaona et Quentin Tenga - Tous droits réservés </a>
	</footer>
</html>