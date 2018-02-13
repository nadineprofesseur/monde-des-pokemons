<?php

	//print_r($_POST);
	
	$nom = $_POST["nom"];
	$type = $_POST["type"];
	$generation = $_POST["generation"];
	$resume = $_POST["resume"];
	$id = $_POST["id"];
	
	$SQL_MODIFIER_POKEMON = "UPDATE pokemon SET nom = '".$nom."', type = '".$type."', generation = '".$generation."', resume = '".$resume."' WHERE idPokemon = ".$id;
	//echo $SQL_MODIFIER_POKEMON;
	
	$base = "mondepokemon";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "testtest";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
	
	
	$requeteModifierPokemon = $basededonnees->prepare($SQL_MODIFIER_POKEMON);
	$requeteModifierPokemon->execute();
?>