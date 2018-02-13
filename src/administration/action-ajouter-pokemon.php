<?php

	print_r($_POST);
	
	$nom = $_POST["nom"];
	$type = $_POST["type"];
	$generation = $_POST["generation"];
	$resume = $_POST["resume"];
	
	$SQL_AJOUTER_POKEMON = "INSERT into pokemon(nom, type, generation, resume) VALUES('".$nom."','".$type."','".$generation."','".$resume."')";
	echo $SQL_AJOUTER_POKEMON;
		
	require_once "basededonnees.php";

	$requeteAjouterPokemon = $basededonnees->prepare($SQL_AJOUTER_POKEMON);
	$requeteAjouterPokemon->execute();

	

?>