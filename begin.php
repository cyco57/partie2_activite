<!DOCTYPE html>
<html>
<head>
	<title>Le Grenier du Vinyle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" media="only screen and (max-device-width : 568px) and (orientation : portrait)" type="text/css" href="style/mobile.css">
	<link rel="stylesheet" media="only screen and (max-device-width : 568px) and (orientation : landscape)" type="text/css" href="style/mobile.css">
	<link rel="stylesheet" media="screen and (min-device-width : 569px)" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet">
</head>

<body>

<header>
		<h1>Le Grenier du Vinyle</h1>
		<h2>Vente de disques Vinyles neufs et d'occasion</h2>
	<ul id="menu">
        <li><a href="?choix=accueil">ACCUEIL</a></li>
        <li><a class="mobile" href="?choix=genre&search=%&nav=1">DISQUES</a></li>
        <li><a class="ordi" href="?choix=genre&search=%&nav=1">CATEGORIES</a>
                <ul>
                   <?php
                   include('modules/menuCat.php');
                   ?>
                </ul>
        </li>
        <li><a href="?choix=promo">PROMOTIONS</a></li>
        <li><a href="#">NOUVEAUTES</a></li>
        <li><a href="#">PANIER</a></li>
        <li><a href="#">CONNEXION</a></li>
        <li><a href="?choix=contact">CONTACT</a></li>
        <li>
        	<form method="POST" action="modules/search.php" id="recherche" name="recherche">
        		<input type="search" name="search" placeholder="Entrez un mot-clef">
       		</form>
        </li>
	</ul>
</header>

<nav>
	<div id="slideshow">
		<ul id="sContent">
			<li><img src="slide/sli01.jpg" alt="sli01" /></li>
			<li><img src="slide/sli02.jpg" alt="sli02" /></li>
			<li><img src="slide/sli03.jpg" alt="sli03" /></li>
			<li><img src="slide/sli04.jpg" alt="sli04" /></li>
			<li><img src="slide/sli05.jpg" alt="sli05" /></li>
			<li><img src="slide/sli06.jpg" alt="sli06" /></li>
			<li><img src="slide/sli07.jpg" alt="sli07" /></li>
			<li><img src="slide/sli08.jpg" alt="sli08" /></li>
		</ul>
	</div>
	<a href="mailto:cyril231275@gmail.com">
	<div id="social1" class="fa-stack fa-3x">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i id="soc1" class="fa fa-envelope fa-stack-1x fa-inverse" aria-hidden="true"></i>
	</div></a>
	<div id="social2" class="fa-stack fa-3x">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i id="soc2" class="fa fa-facebook fa-stack-1x fa-inverse" aria-hidden="true"></i>
	</div>
	<div id="social3" class="fa-stack fa-3x">
		<i class="fa fa-circle fa-stack-2x"></i>
		<i id ="soc3" class="fa fa-twitter fa-stack-1x fa-inverse" aria-hidden="true"></i>
	</div>
</nav>
<section id="content">

		<?php
		if (isset($_GET['choix'])) {
			switch ($_GET['choix']) {
				case 'genre':
					include('modules/affichageRefs.php');
					break;
				case 'promo':
					include('modules/affichePromos.php');
					break;
				case 'accueil':
					include('modules/accueil.php');
					break;
				case 'recherche':
					include('modules/rechercheRefs.php');
					break;
				case 'contact':
					include('modules/formulaire.php');
					break;
			}	
		}
		else include('modules/accueil.php');
		?>

</section>
<footer>
</footer>
</body>
</html>