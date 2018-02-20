<?php

	$idPokemon = filter_var($_GET["pokemon"],FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemon = $pokemonDao->lirePokemon($idPokemon);		
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Monde des Pokémons - Administration</title>
</head>
<body>
	<header>
		<h1>Monde des Pokémons - Administration</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Effacer un pokemon</h2></header>
		<form method="post" action="index.php">
			
			<input type="hidden" name="id" value="<?=$pokemon['idPokemon']?>"/>

			Voulez-vous vraiment effacer <?=$pokemon['nom']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-pokemon" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>