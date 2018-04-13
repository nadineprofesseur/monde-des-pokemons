<?php 	

	if(!empty($_POST['action-rechercher']))
	{
		//print_r($_POST);
		$terme = $_POST['recherche'];
		echo $terme;
		
		
	}

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
	
	

		<section id="section-recherche">
		
			<form method="post" action="" id="formulaire-recherche">
			
				<input type="text" name="recherche" id="recherche"/>
				<input type="submit" value="Rechercher" name="action-rechercher"/>
			
			</form>
		
		</section>
	
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