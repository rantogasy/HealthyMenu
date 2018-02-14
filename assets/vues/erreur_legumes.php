<!-- Vue correspondant à une erreur dans le choix des légumes -->

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
				<!--<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-default bouton1">Déconnexion</button>
				</div>-->
				<button type="button" class="bouton1">Déconnexion</button>
			</div>
		</header>
		<div class="nom page-header">
			<a style="color:black">HEALTHY</a><a style="color:red">MENUS</a>
		</div>
		<div class="navigation navbar navbar-default sticky-top col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<ul>
				<li>
					<a href="#" class="active">Demander un menu</a>
				</li>
				<li>
					<a href="precedents">Mes repas précédents</a>
				</li>
				<li>
					<a href="favoris">Mes favoris</a>
				</li>
				<li>
					<a href="compte">Mon compte</a>
				</li>
			</ul>
		</div>
		<!-- Début du cadre blanc dans le cadre gris -->
		<div class="contenu col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<br>
			<table class="choisir col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<tr>
					<td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<a class="col-xs-4 col-sm-4 col-md-4 col-lg-4 categorie">Viande ou poisson</a>
						<div class="row">
							<div class="col-lg-6">
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="boutonDropDown_2">Choisir <span class="caret">
											</span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Porc</a></li>
											<li><a href="#">Boeuf</a></li>
											<li><a href="#">Veau</a></li>
											<li><a href="#">Agneau</a></li>
											<li><a href="#">Poulet</a></li>
											<li><a href="#">Cabillaud à la vapeur</a></li>
											<li><a href="#">Poisson pané</a></li>
											<li><a href="#">Saumon</a></li>
											<li><a href="#">Truite</a></li>
										</ul>
									</div>
									<input type="text" class="form-control" aria-label="...">
								</div>
							</div>
						</div>
					</td>
					<td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<a class="col-xs-4 col-sm-4 col-md-4 col-lg-4 categorie">Légumes ou féculents</a>
						<div class="row">
							<div class="col-lg-6">
								<div class="erreur" style="background-color:#F5A9A9; text-align:center; margin:10% 10%">
									<a style="color:red">Erreur légumes !</a>
								</div>
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="boutonDropDown">Choisir <span class="caret">
											</span>
										</button>
										<ul class="dropdown-menu"  id="test">
											<li><a href="#">Haricots</a></li>
											<li><a href="#">Petits pois</a></li>
											<li><a href="#">Courgettes</a></li>
											<li><a href="#">Carottes</a></li>
											<li><a href="#">Brocolis</a></li>
											<li><a href="#">Courgettes</a></li>
											<li><a href="#">Aubergine</a></li>
											<li><a href="#">Epinards</a></li>
										</ul>
									</div>
									<!-- /btn-group -->
									<input type="text" class="form-control" aria-label="..." id="testInput">
								</div>
								<!-- /input-group -->
							</div>
							<!-- /.col-lg-6 -->
						</div>
					</td>
					<td class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<a class="col-xs-4 col-sm-4 col-md-4 col-lg-4 categorie">(éventuel dessert)</a>
						<div class="row">
							<div class="col-lg-6">
								<div class="input-group">
									<div class="input-group-btn">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir <span class="caret">
											</span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Yaourt</a></li>
											<li><a href="#">Compote de fruits</a></li>
											<li><a href="#">Gâteau</a></li>
										</ul>
									</div>
									<!-- /btn-group -->
									<input type="text" class="form-control" aria-label="...">
								</div>
								<!-- /input-group -->
							</div>
							<!-- /.col-lg-6 -->
						</div>
					</td>
				</ul>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<br>
	</div>
	<script type="text/javascript">
		var listeMenu = document.getElementById("test");
		var testInput = document.getElementById("testInput");
		listeMenu.addEventListener('click', (event)=>{
		var tmp = event.target.textContent;
		testInput.value = tmp;
		});
		var selector = document.getElementById('boutonDropDown');
		var selector_2 = document.getElementById('boutonDropDown_2');
		
		selector.addEventListener('click', (event) => {
		var tmp = document.querySelectorAll(".dropdown-menu");
		if(tmp[1].style.display === "none"){
		tmp[1].style.display = "block";
		}else{
		tmp[1].style.display = "none";
		}
		console.log(tmp[1].style.display);
		});
		
	</script>
	</body>
	<footer class="fixed-bottom col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a>© Copyright 2017 - Ranto Ralijaona et Quentin Tenga - Tous droits réservés </a>
	</footer>
</html>