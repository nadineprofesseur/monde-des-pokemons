<?php 
if(!empty($_POST['action-effacer-pokemon']))
{
	//echo "action-effacer-pokemon";
	//print_r($_POST);

	if(!empty($_POST['confirmation-oui']))
	{		
		include_once "../accesseur/PokemonDAO.php";
		$pokemonDao = new PokemonDAO();
		$pokemonDao->effacerPokemon($_POST['id']);
	}
	else
	{
	?>
	Vous ne voulez pas supprimer le pokémon
	<?php	
	}
}
	?>