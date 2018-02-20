<?php
if(!empty($_POST['action-modifier-pokemon']))
{
	//echo "action-modifier-pokemon";
	//print_r($_POST);
	include_once "../accesseur/PokemonDAO.php";
	$filtrePokemon = array();
	$filtrePokemon['nom'] = FILTER_SANITIZE_STRING;
	$filtrePokemon['type'] = FILTER_SANITIZE_STRING;
	$filtrePokemon['generation'] = FILTER_SANITIZE_NUMBER_INT;
	$filtrePokemon['resume'] = FILTER_SANITIZE_STRING;	
	$filtrePokemon['id'] = FILTER_SANITIZE_NUMBER_INT;
	$pokemon = filter_var_array($_POST, $filtrePokemon); // $pokemon = filter_input_array(INPUT_POST, $filtrePokemon);
	$pokemonDao = new PokemonDAO();
	$pokemonDao->modifierPokemon($pokemon);	
	
}

?>