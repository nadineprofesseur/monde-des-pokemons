<?php

	$idPokemon = filter_var($_GET["pokemon"], FILTER_SANITIZE_NUMBER_INT);
	
	include "accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemon = $pokemonDao->lirePokemon($idPokemon);

	include "accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$listeApparitions = $apparitionDao->listerApparitionDePokemon($idPokemon);	
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
		<header><h2>Pokémon : <?=$pokemon['nom']?></h2></header>

		<section>
			<div>
				Type : <?=$pokemon['type']?>
			</div>
			<div>
				Génération : <?=$pokemon['generation']?>
			</div>
			
			<p><?=$pokemon['resume']?></p>				
		</section>
		
		<section>
			<h3>Liste des épisodes</h3>
			<?php 
				//print_r($listeApparitions);
				foreach($listeApparitions as $apparition)
				{
				?>
				<div>
					<h4><a href="apparition.php?apparition=<?=$apparition['idApparition']?>">Episode : <?=$apparition['episode']?></a></h4>
					<p><?=$apparition['description']?></p>
				</div>
				<?php
				}
			?>
		</section>
	
		<nav><a href="index.php">Revenir à la liste des pokémons</a></nav>
	</section>
	
	
	<footer><span id="signature"></span></footer>
</body>
</html>