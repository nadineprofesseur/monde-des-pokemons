<?php 
if(!empty($_POST['action-effacer-pokemon']))
{
	//echo "action-effacer-pokemon";
	//print_r($_POST);

	if(!empty($_POST['confirmation-oui']))
	{		
		$idPokemon = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		include_once "../accesseur/PokemonDAO.php";
		$pokemonDao = new PokemonDAO();
		$pokemonDao->effacerPokemon($idPokemon);
	}
	else
	{
	?>
	Vous ne voulez pas supprimer le pokémon
	<?php	
	}
}
	?>