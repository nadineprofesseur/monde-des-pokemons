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
			global $basededonnees;
	
			$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = $id";
			//echo $LIRE_POKEMON;
			//$curseurPokemon = $basededonnees->query($LIRE_POKEMON);
			//$pokemon = $curseurPokemon->fetch();
			
			$requeteLirePokemon = $basededonnees->prepare($LIRE_POKEMON);
			$requeteLirePokemon->execute();
			$pokemon = $requeteLirePokemon->fetch();
			
			//print_r($pokemon);
			//var_dump($pokemon);	
			
			return $pokemon;
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