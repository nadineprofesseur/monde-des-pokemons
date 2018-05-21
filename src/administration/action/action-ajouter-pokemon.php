<?php
if(!empty($_POST['action-ajouter-pokemon']))
{
	
	//include "action-recevoir-pokemon-illustration.php";
	//echo "action-ajouter-pokemon";
	include "../modele/Pokemon.php";
	$pokemon = new Pokemon($_POST);
	//print_r($pokemon);
	include_once "../accesseur/PokemonDAO.php";
	$pokemonDao = new PokemonDAO();
	$pokemonDao->ajouterPokemon($pokemon);	
}

?>