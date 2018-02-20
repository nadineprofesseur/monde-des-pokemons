<?php

	$idPokemon = filter_var($_GET["pokemon"], FILTER_SANITIZE_NUMBER_INT);
	
	include "accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemon = $pokemonDao->lirePokemon($idPokemon);

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
	
		<nav><a href="index.php">Revenir à la liste des pokémons</a></nav>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>