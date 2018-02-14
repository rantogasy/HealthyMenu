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
		<div class="cases">
		<?php echo validation_errors(); ?>
		<?php echo form_open('Inscription/connexion',array()); ?>
			<label for="mail" style="color:white">Déja inscrit ? Adresse mail : </label>
			<input id="mail" type="text" name="mail" style="color:black" required/> 
			<label for="mdp" style="color:white">Mot de passe : </label>
			<input id="mdp" type="password" name="mdp" style="color:black" required/>
			<input type="submit" value="Connexion" style="background-color:red; color:white; font-weight:bold">
		<?php echo form_close(); ?>
		</div>


	</div>
</header>
<body>
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
		<br>
		<p style="text-align:center; font-size:20px; font-weight:bold; color:grey; text-shadow: 0 0 1px black">Pas de compte ? Inscrivez-vous !</p>
		<br>
		<div class="formulaire">
			<?php echo validation_errors(); ?>
			<?php echo form_open('Inscription/inscription', array()); ?>
			<label for="nom">Nom : </label>
			<input id="nom" type="text" name="nom" required/>
			<label for="prenom">Prénom : </label>
			<input id="prenom" type="text" name="prenom" required/>
			<label for="mail">Adresse mail : </label>
			<input id="mail" type="text" name="email" required/>
			<label for="mdp">Mot de passe : </label>
			<input id="mdp" type="password" name="mdp" required/>
			<label for="allergies">Allergies : (écrire "aucune" si vous n'en avez pas)</label>
			<input id="allergies" type="text" name="allergies" required/><br><br>
			<input type="submit" value="Créer mon compte" style="background-color:red; color:white; font-weight:bold">
			<br>
			<br>
			<?php echo form_close(); ?>

		</div>
		<br>
	</div>
</body>
<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<a>© Copyright 2017 - Ranto Ralijaona et Quentin Tenga - Tous droits réservés </a>
</footer>
</html>