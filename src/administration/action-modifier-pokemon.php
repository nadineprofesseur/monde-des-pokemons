<?php
if(!empty($_POST['action-modifier-pokemon']))
{
	//echo "action-modifier-pokemon";
	//print_r($_POST);
	include_once "../accesseur/PokemonDAO.php";
	$pokemon = $_POST; // TODO : filtrer
	$pokemonDao = new PokemonDAO();
	$pokemonDao->modifierPokemon($pokemon);	
	
}

?>