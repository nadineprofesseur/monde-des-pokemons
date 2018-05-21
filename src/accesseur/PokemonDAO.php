<?php 
	require_once "basededonnees.php";
	require_once "../modele/Pokemon.php";
	class PokemonDAO
	{		
		function lireListe()
		{
			global $basededonnees;
			
			$LISTE_POKEMON = "SELECT * FROM pokemon";
			$requeteListePokemons = $basededonnees->prepare($LISTE_POKEMON);
			$requeteListePokemons->execute();
			$listePokemon = $requeteListePokemons->fetchAll(PDO::FETCH_OBJ);
			return $listePokemon;
		}
		
		function rechercherListe($terme)
		{
			global $basededonnees;
			$LISTE_POKEMON = "SELECT * FROM pokemon WHERE nom LIKE '%$terme%' OR resume LIKE '%$terme%' OR type LIKE '%$terme%';";
			//$LISTE_POKEMON = "SELECT * FROM pokemon WHERE nom LIKE CONCAT('%', :terme, '%') OR resume LIKE '%$terme%' OR type LIKE '%$terme%';";
			//echo $LISTE_POKEMON;
			$requeteListePokemons = $basededonnees->prepare($LISTE_POKEMON);
			//$requeteLirePokemon->bindParam(":terme", $terme);
			$requeteListePokemons->execute();
			$listePokemon = $requeteListePokemons->fetchAll(PDO::FETCH_OBJ);
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
			$pokemon = $requeteLirePokemon->fetch(PDO::FETCH_ASSOC);
			$pokemon = new Pokemon($pokemon);
			
			//print_r($pokemon);
			//var_dump($pokemon);	
			
			return $pokemon;
		}
		
		function ajouterPokemon($pokemon)
		{
			global $basededonnees;
			//echo "PokemonDao->ajouterPokemon()";
			//print_r($_POST);
	
			$nom = $pokemon->nom;
			$type = $pokemon->type;
			$generation = $pokemon->generation;
			$resume = $pokemon->resume;
			
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
			
			$nom = $pokemon->nom;
			$type = $pokemon->type;
			$generation = $pokemon->generation;
			$resume = $pokemon->resume;
			$id = $pokemon->id;
			
			$SQL_MODIFIER_POKEMON = "UPDATE pokemon SET nom = :nom, type = :type, generation = :generation, resume = :resume WHERE idPokemon = :id_pokemon";
			//echo $SQL_MODIFIER_POKEMON;
						
			$requeteModifierPokemon = $basededonnees->prepare($SQL_MODIFIER_POKEMON);
			$requeteModifierPokemon->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteModifierPokemon->bindParam(':type',$type, PDO::PARAM_STR);
			$requeteModifierPokemon->bindParam(':generation',$generation, PDO::PARAM_INT);
			$requeteModifierPokemon->bindParam(':resume',$resume, PDO::PARAM_STR);
			$requeteModifierPokemon->bindParam(":id_pokemon", $id, PDO::PARAM_INT);
			$requeteModifierPokemon->execute();			
		}
		
		function effacerPokemon($id)
		{
			global $basededonnees;
			$SQL_EFFACER_POKEMON = "DELETE FROM pokemon WHERE idPokemon = :id_pokemon";
			//echo $SQL_EFFACER_POKEMON;
			$requeteEffacerPokemon = $basededonnees->prepare($SQL_EFFACER_POKEMON);
			$requeteEffacerPokemon->bindParam(":id_pokemon", $id);
			$requeteEffacerPokemon->execute();		
		}
		
		function rechercherSuggestions($recherche)
		{
			// Se connecter a la base de donnees
			global $basededonnees;
			// Preparer un SQL en utilisant le parametre recupere dans $_GET // SELECT champ FROM table WHERE champ LIKE '$recherche%'
			$SQL_RECHERCHER_SUGGESTIONS = "SELECT nom as terme FROM pokemon WHERE nom LIKE CONCAT('%', :recherche, '%') UNION SELECT type as terme FROM pokemon WHERE type LIKE CONCAT('%', :recherche, '%') UNION SELECT resume as terme FROM pokemon WHERE resume LIKE CONCAT('%', :recherche, '%')";
			// echo $SQL_RECHERCHER_SUGGESTIONS;
			// Executer la requete et recuperer tous les resultats avec fetchAll() dans une $listeChoix
			$requeteRechercherSuggestions = $basededonnees->prepare($SQL_RECHERCHER_SUGGESTIONS);
			$requeteRechercherSuggestions->bindParam(':recherche', $recherche, PDO::PARAM_STR);
			$requeteRechercherSuggestions->execute();
			$suggestions = $requeteRechercherSuggestions->fetchAll(PDO::FETCH_OBJ);
			//print_r($suggestions);
			return $suggestions;
		}
	}

?>