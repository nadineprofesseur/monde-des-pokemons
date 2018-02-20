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
	}
?>