<?php
if(!empty($_POST['action-modifier-pokemon']))
{
	//echo "action-modifier-pokemon";
	//print_r($_POST);
	
	$nom = $_POST["nom"];
	$type = $_POST["type"];
	$generation = $_POST["generation"];
	$resume = $_POST["resume"];
	$id = $_POST["id"];
	
	$SQL_MODIFIER_POKEMON = "UPDATE pokemon SET nom = '".$nom."', type = '".$type."', generation = '".$generation."', resume = '".$resume."' WHERE idPokemon = ".$id;
	//echo $SQL_MODIFIER_POKEMON;
	
	
	require_once "basededonnees.php";
	
	$requeteModifierPokemon = $basededonnees->prepare($SQL_MODIFIER_POKEMON);
	$requeteModifierPokemon->execute();
}

?>