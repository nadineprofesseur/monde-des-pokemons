<?php

	print_r($_POST);
	
	$nom = $_POST["nom"];
	$type = $_POST["type"];
	$generation = $_POST["generation"];
	$resume = $_POST["resume"];
	
	$SQL_AJOUTER_POKEMON = "INSERT into pokemon(nom, type, generation, resume) VALUES('".$nom."','".$type."','".$generation."','".$resume."')";
	echo $SQL_AJOUTER_POKEMON;
	
	
	$base = "mondepokemon";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "testtest";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);

	$requeteAjouterPokemon = $basededonnees->prepare($SQL_AJOUTER_POKEMON);
	$requeteAjouterPokemon->execute();

	

?>