<?php 
	include "basededonnees.php";	

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