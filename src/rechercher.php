<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Monde des Pokémons</title>
	<script type="text/javascript" src="lib/Ajax.js"></script>
	<script type="text/javascript">
		// ETAPE 1 - EVENEMENT
		function rechercherRapidement()
		{
			console.log('#recherche.onsubmit');
			console.log('rechercherRapidement()');
			recherche = document.querySelector("#recherche").value;
			parametre = "recherche=" + recherche;
			console.log(parametre);			
			
			// ETAPE 2 - REQUETE
			ajax = new Ajax();
			console.log(ajax);
			url = 'http://localhost/monde-pokemons/src/action/rechercher-rapidement.php';
			ajax.executer("GET", url, parametre, recevoirRechercheRapide);
			
			return false;
		}
		
		function recevoirRechercheRapide(ajax)
		{
			console.log('recevoirRechercheRapide()');
			console.log(ajax.responseText);
		}
	</script>
	<style>
	#section-recherche
	{
		position:relative;
		width:30em;
	}
	#section-recherche input[type=text]
	{
		width:300px;
	}
	#boite-resultats
	{
		display:none;
		width:300px;
		border:solid 2px #ceaf37;
		background-color:#f7e9b4;
		position:absolute;
	}
	</style>
</head>
<body>
	<header>
		<h1><?=_('Monde des Pokémons')?></h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
	
		<section id="section-recherche">
		
			<form method="post" action="" id="formulaire-recherche" onsubmit="return rechercherRapidement()">
				<input type="text" name="recherche" id="recherche" value=""/>
				<input type="submit" value="Rechercher" name="action-rechercher"/>
			</form>
			<div id="boite-resultats"></div>
		
		</section>
	
		<header><h2>Liste des pokémons</h2></header>

	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>