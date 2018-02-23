<?php
	include_once "basededonnees.php";
	class ApparitionDAO
	{
		function listerApparitionDePokemon($idPokemon)
		{			
			$LISTER_APPARITIONS = "SELECT * FROM apparition WHERE idPokemon = " . $idPokemon;
			global $basededonnees;
			$requeteListerApparitions = $basededonnees->prepare($LISTER_APPARITIONS);
			$requeteListerApparitions->execute();
			return $requeteListerApparitions->fetchAll();
		}
		
		function lireApparition($idApparition)
		{
			$LIRE_APPARITION = "SELECT * FROM apparition WHERE idApparition = $idApparition";
			global $basededonnees;
			$requeteLireApparition = $basededonnees->prepare($LIRE_APPARITION);
			$requeteLireApparition->execute();
			return $requeteLireApparition->fetch();
		}
		
		function ajouterApparition($apparition)
		{
			echo "ApparitionDAO.ajouterApparition()";
			//print_r($apparition);
			$AJOUTER_APPARITION = "INSERT INTO apparition(idPokemon, episode, description, majeur) VALUES('".$apparition['idPokemon']."','".$apparition['episode']."','".$apparition['description']."','".$apparition['majeur']."')";
			//echo $AJOUTER_APPARITION;
			global $basededonnees;
			$requeteAjouterApparition = $basededonnees->prepare($AJOUTER_APPARITION);
			$requeteAjouterApparition->execute();
		}
		
		function modifierApparition($apparition)
		{
			//echo "ApparitionDAO.modifierApparition()";
			//print_r($apparition);
			$MODIFIER_APPARITION = "UPDATE apparition SET episode = '".$apparition['episode']."', description = '".$apparition['description']."', majeur = '".$apparition['majeur']."' WHERE idApparition = '".$apparition['idApparition']."'";
			echo $MODIFIER_APPARITION;
			//global $basededonnees;
			//$requeteModifierApparition = $basededonnees->prepare($MODIFIER_APPARITION);
			//$requeteModifierApparition->execute();
		}
	}
?>