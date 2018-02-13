<?php

	$idPokemon = $_GET["pokemon"];

	require_once "basededonnees.php";	
	
	$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = $idPokemon";
	//echo $LIRE_POKEMON;
	//$curseurPokemon = $pdo->query($LIRE_POKEMON);
	//$pokemon = $curseurPokemon->fetch();
	
	$requeteLirePokemon = $basededonnees->prepare($LIRE_POKEMON);
	$requeteLirePokemon->execute();
	$pokemon = $requeteLirePokemon->fetch();
	
	//print_r($pokemon);
	//var_dump($pokemon);
?>
<?php 
	// print_r($_POST);
	if(!empty($_POST['action-modifier-pokemon']))
	{
		include "action-modifier-pokemon.php";
	}

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
		<header><h2>Modifier un pokemon</h2></header>
		<form method="post" action="modifier-pokemon.php?pokemon=<?=$pokemon['idPokemon']?>">
			
			<input type="hidden" name="id" value="<?=$pokemon['idPokemon']?>"/>

			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$pokemon['nom']?>"/>
			</div>
		
			<div>
				<label for="type">Type</label>
				<input type="text" name="type" id="type" value="<?=$pokemon['type']?>"/>
			</div>
			
			<div>
				<label for="generation">Generation</label>
				<input type="number" name="generation" id="generation" value="<?=$pokemon['generation']?>"/>
			</div>
			
			<div>
				<label for="resume">Resume</label>
				<textarea name="resume" id="resume"><?=$pokemon['resume']?></textarea>
			</div>
						
			<input type="submit" name="action-modifier-pokemon" value="Enregistrer"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>