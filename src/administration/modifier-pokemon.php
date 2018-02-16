<?php 
	include "action-modifier-pokemon.php";

	$idPokemon = filter_var($_GET["pokemon"], FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemon = $pokemonDao->lirePokemon($idPokemon);		
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