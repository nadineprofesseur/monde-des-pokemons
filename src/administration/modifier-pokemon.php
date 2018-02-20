<?php 
	include "action/action-modifier-pokemon.php";

	$idPokemon = filter_var($_GET["pokemon"], FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemon = $pokemonDao->lirePokemon($idPokemon);		

	include "../accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$listeApparitions = $apparitionDao->listerApparitionDePokemon($idPokemon);		
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
		
		<nav><a href="index.php">Revenir à la liste des pokémons</a></nav>
	</section>
	
	<section>
		Ajouter
		<?php 
		
			foreach($listeApparitions as $apparition)
			{
				//print_r($apparition);
			?>
			<div>
				Épisode <?=$apparition['episode']?> Modifier Supprimer
			</div>
			<?php
			}
		
		?>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>