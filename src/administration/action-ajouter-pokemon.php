<?php
if(!empty($_POST['action-ajouter-pokemon']))
{
	//echo "action-ajouter-pokemon";
	include_once "../accesseur/PokemonDAO.php";
	$pokemon = $_POST; // TODO : filtrer
	$pokemonDao = new PokemonDAO();
	$pokemonDao->ajouterPokemon($pokemon);	
}

?>