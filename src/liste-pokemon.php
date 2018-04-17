<?php 	

	include "accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	
	$recherche = "";
	if(!empty($_POST['action-rechercher']))
	{ 	//print_r($_POST);
		$recherche = filter_var($_POST['recherche'],FILTER_SANITIZE_STRING); 
		//echo $recherche;
		$listePokemon = $pokemonDao->rechercherListe($recherche);
		
	}
	else
	{
		$listePokemon = $pokemonDao->lireListe();
	}
	//exit(0);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Monde des Pokémons</title>
	<script type="text/javascript" src="lib/Ajax.js"></script>
	<script type="text/javascript">
		// ETAPE 1 - EVENEMENT
		function rechercherLesSuggestions()
		{
			console.log('#recherche.onkeyup');
			recherche = document.querySelector("#recherche").value;
			console.log('recherche='+recherche);
			
			// ETAPE 2 - REQUETE
			ajax = new Ajax();
			//console.log(ajax);
			url = 'http://localhost/monde-pokemons/src/action/suggestion.php';
			ajax.executer("GET", url, "", recevoirLesSuggestions);
			
			
		}
		
		// ETAPE 3 - RECEPTION (traitement)
		function recevoirLesSuggestions()
		{
			
			
			
			// ETAPE 4 - AFFICHAGE (retroaction)
			
		}
	</script>
</head>
<body>
	<header>
		<h1>Monde des Pokémons</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
	
	

		<section id="section-recherche">
		
			<form method="post" action="" id="formulaire-recherche">
			
				<input type="text" name="recherche" id="recherche" value="<?=$recherche?>" onkeyup="rechercherLesSuggestions()"/>
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