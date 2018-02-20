<?php
if(!empty($_POST['action-ajouter-pokemon']))
{
	//echo "action-ajouter-pokemon";
	$filtrePokemon = array();
	$filtrePokemon['nom'] = FILTER_SANITIZE_STRING;
	$filtrePokemon['type'] = FILTER_SANITIZE_STRING;
	$filtrePokemon['generation'] = FILTER_SANITIZE_NUMBER_INT;
	$filtrePokemon['resume'] = FILTER_SANITIZE_STRING;
	$pokemon = filter_var_array($_POST, $filtrePokemon); // $pokemon = filter_input_array(INPUT_POST, $filtrePokemon);
	//print_r($pokemon);
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemonDao->ajouterPokemon($pokemon);	
}

?>