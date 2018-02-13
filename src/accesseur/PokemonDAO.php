<?php 
	include "basededonnees.php";	
	class PokemonDAO
	{		
		
		function lireListe()
		{
			global $basededonnees;
			$requeteListePokemons = $basededonnees->prepare("SELECT * FROM pokemon");
			$requeteListePokemons->execute();
			$listePokemon = $requeteListePokemons->fetchAll();
			return $listePokemon;
		}
		
		function lirePokemon($id)
		{
			
		}
		
		function ajouterPokemon($pokemon)
		{
			
		}
		
		function modifierPokemon($pokemon)
		{
			
			
		}
		
		function effacerPokemon($pokemon)
		{
			
			
		}
	}

?>