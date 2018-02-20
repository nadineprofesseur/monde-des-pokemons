<?php
	$idApparition = filter_var($_GET['apparition'], FILTER_SANITIZE_NUMBER_INT);
	echo $idApparition;
	
	include "accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$apparition = $apparitionDao->lireApparition($idApparition);
	//print_r($apparition);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Monde des Pokémons</title>
</head>
<body>
	<header>
		<h1>Monde des Pokémons</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Apparition de l'épisode <? //$apparition['episode']?></h2></header>

		<div>
		</div>
		<div>
		</div>
	
		<nav><a href="pokemon.php">Revenir à la liste des apparitions</a></nav>
	</section>
	
	
	<footer><span id="signature"></span></footer>
</body>
</html>