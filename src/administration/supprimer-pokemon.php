<?php

	$idPokemon = $_GET["pokemon"];

	$base = "mondepokemon";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "testtest";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$pdo = new PDO($dsn, $usager, $motdepasse);
	
	
	$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = $idPokemon";
	//echo $LIRE_POKEMON;
	//$curseurPokemon = $pdo->query($LIRE_POKEMON);
	//$pokemon = $curseurPokemon->fetch();
	
	$requeteLirePokemon = $pdo->prepare($LIRE_POKEMON);
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
		<header><h2>Supprimer un pokemon</h2></header>
		<form method="post" action="action-supprimer-pokemon.php">
			
			<input type="hidden" name="id" value="<?=$pokemon['idPokemon']?>"/>

			Voulez-vous vraiment supprimer <?=$pokemon['nom']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>