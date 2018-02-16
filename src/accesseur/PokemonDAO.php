<?php 
	require_once "basededonnees.php";
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
	
			$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = :id_pokemon";
			//$LIRE_POKEMON = "SELECT * FROM pokemon WHERE idPokemon = $id";
			//echo $LIRE_POKEMON;
			//$curseurPokemon = $basededonnees->query($LIRE_POKEMON);
			//$pokemon = $curseurPokemon->fetch();
			
			$requeteLirePokemon = $basededonnees->prepare($LIRE_POKEMON);
			$requeteLirePokemon->bindParam(":id_pokemon", $id);
			$requeteLirePokemon->execute();
			$pokemon = $requeteLirePokemon->fetch();
			
			//print_r($pokemon);
			//var_dump($pokemon);	
			
			return $pokemon;
		}
		
		function ajouterPokemon($pokemon)
		{
			global $basededonnees;
			//echo "PokemonDao->ajouterPokemon()";
			//print_r($_POST);
	
			$nom = $pokemon["nom"];
			$type = $pokemon["type"];
			$generation = $pokemon["generation"];
			$resume = $pokemon["resume"];
			
			$SQL_AJOUTER_POKEMON = "INSERT into pokemon(nom, type, generation, resume) VALUES(:nom,:type,:generation,:resume)";
			//echo $SQL_AJOUTER_POKEMON;
				
			$requeteAjouterPokemon = $basededonnees->prepare($SQL_AJOUTER_POKEMON);
			$requeteAjouterPokemon->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteAjouterPokemon->bindParam(':type',$type, PDO::PARAM_STR);
			$requeteAjouterPokemon->bindParam(':generation',$generation, PDO::PARAM_INT);
			$requeteAjouterPokemon->bindParam(':resume',$resume, PDO::PARAM_STR);
			$requeteAjouterPokemon->execute();	
		}
		
		function modifierPokemon($pokemon)
		{
			global $basededonnees;
			
			$nom = $pokemon["nom"];
			$type = $pokemon["type"];
			$generation = $pokemon["generation"];
			$resume = $pokemon["resume"];
			$id = $pokemon["id"];
			
			$SQL_MODIFIER_POKEMON = "UPDATE pokemon SET nom = '".$nom."', type = '".$type."', generation = '".$generation."', resume = '".$resume."' WHERE idPokemon = ".$id;
			//echo $SQL_MODIFIER_POKEMON;
						
			$requeteModifierPokemon = $basededonnees->prepare($SQL_MODIFIER_POKEMON);
			$requeteModifierPokemon->execute();			
		}
		
		function effacerPokemon($id)
		{
			global $basededonnees;
			$SQL_EFFACER_POKEMON = "DELETE FROM pokemon WHERE idPokemon = " . $_POST['id'];
			//echo $SQL_EFFACER_POKEMON;
			$requeteEffacerPokemon = $basededonnees->prepare($SQL_EFFACER_POKEMON);
			$requeteEffacerPokemon->execute();		
		}
	}

?>