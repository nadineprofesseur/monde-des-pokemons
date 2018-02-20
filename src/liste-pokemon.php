<?php 	
	include "accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$listePokemon = $pokemonDao->lireListe();
	//exit(0);
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
		<header><h2>Liste des pokémons</h2></header>
	
	
		<?php
		foreach($listePokemon as $pokemon)
		{
		?>
		<div>
			<div>
				<a href="pokemon.php?pokemon=<?=$pokemon['idPokemon']?>">
					<?=$pokemon['nom']?>
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