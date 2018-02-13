<?php 

	include "action-ajouter-pokemon.php";
	include "action-effacer-pokemon.php";

	require_once "basededonnees.php";
	$requeteListePokemons = $basededonnees->prepare("SELECT * FROM pokemon");
	$requeteListePokemons->execute();
	$listePokemon = $requeteListePokemons->fetchAll();
	
	/*
	echo "<pre>";
	var_export($listePokemon);
	echo "</pre>";
	*/
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1></h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
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