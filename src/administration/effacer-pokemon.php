<?php

	$idPokemon = $_GET["pokemon"];

	require_once "basededonnees.php";
		
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
	<title></title>
</head>
<body>
	<header>
		<h1>Administration du Monde des Pokemons</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Effacer un pokemon</h2></header>
		<form method="post" action="liste-pokemon.php">
			
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