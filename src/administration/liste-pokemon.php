<?php 

	include "action-ajouter-pokemon.php";
	include "action-effacer-pokemon.php";
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$listePokemon = $pokemonDao->lireListe();	
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
		<header><h2>Liste des pokémons</h2></header>
	
		<div>
		<a href="ajouter-pokemon.html">Ajouter un pokemon</a>
		</div>
	
		<?php
		foreach($listePokemon as $pokemon)
		{
		?>
		<div>
			<div>
				<?=$pokemon['nom']?>
				
				<a href="modifier-pokemon.php?pokemon=<?=$pokemon['idPokemon']?>">
				Modifier
				</a>
				<a href="effacer-pokemon.php?pokemon=<?=$pokemon['idPokemon']?>">
				Effacer
				</a>

				
				
			</div>
		</div>
		<?php
		}
		?>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>