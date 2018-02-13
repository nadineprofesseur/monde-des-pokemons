<?php

	$idPokemon = $_GET["pokemon"];

	include "basededonnees.php";	
	
	$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = $idPokemon";
	//echo $LIRE_POKEMON;
	//$curseurPokemon = $basededonnees->query($LIRE_POKEMON);
	//$pokemon = $curseurPokemon->fetch();
	
	$requeteLirePokemon = $basededonnees->prepare($LIRE_POKEMON);
	$requeteLirePokemon->execute();
	$pokemon = $requeteLirePokemon->fetch();
	
	//print_r($pokemon);
	//var_dump($pokemon);
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
		<header><h2>Pokémon : <?=$pokemon['nom']?></h2></header>
		
		<div>
			Type : <?=$pokemon['type']?>
		</div>
		<div>
			Génération : <?=$pokemon['generation']?>
		</div>
		
		<p><?=$pokemon['resume']?></p>		
		
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>