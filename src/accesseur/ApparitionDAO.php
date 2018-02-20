<?php
	include "basededonnees.php";
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
	}
?>