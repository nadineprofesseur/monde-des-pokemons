<?php

	/** Le preparer en dernier apres avoir fait tout l'AJAX
	 ** - Permet d'etre certain du format attendu par le JavaScript
	 ** - Permet de ne pas avoir a debugger les 2 technologies en meme temps
	 ** Pointe le navigateur vers le script AVEC les parametres
	 ** Exemple: http://localhost/autocomplete/suggestion.php?recherche=A
	 ** Ou meme sur le source dans Chrome
	 ** view-source:http://localhost/autocomplete/suggestion.php?recherche=A
	 **/

	//print_r($_GET);
	$recherche = filter_var($_GET['recherche'], FILTER_SANITIZE_STRING);
	
	// SECTION PREPARATION DES DONNEES
	
	include "../accesseur/PokemonDAO.php";
	$pokemonDAO = new PokemonDAO();
	$suggestions = $pokemonDAO->rechercherSuggestions($recherche);
	//print_r($suggestions);
?>

<ul id="suggestions">
<?php

	// SECTION AFFICHAGE
	
	// foreach sur les donnees recues et generer un li par item
	foreach($suggestions as $suggestion)
	{		
?>
	<li><a href="#" onclick="afficherSuggestion('<?=$suggestion['terme']?>')"><?=$suggestion['terme']?></a></li>
<?php
}
?>
</ul>
