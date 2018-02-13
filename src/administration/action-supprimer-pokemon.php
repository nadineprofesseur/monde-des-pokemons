<?php 
//print_r($_POST);

if(!empty($_POST['confirmation-oui']))
{
	$SQL_EFFACER_POKEMON = "DELETE FROM pokemon WHERE idPokemon = " . $_POST['id'];
	//echo $SQL_EFFACER_POKEMON;
	include "basededonnees.php";
	$requeteEffacerPokemon = $basededonnees->prepare($SQL_EFFACER_POKEMON);
	$requeteEffacerPokemon->execute();
}
else
{
?>
Vous ne voulez pas supprimer le pokémon
<?php	
}


?>