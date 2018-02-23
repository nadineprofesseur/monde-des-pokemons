<?php
if(!empty($_POST['action-ajouter-apparition']))
{
	//echo "ajouter une apparition";
	$apparition = $_POST; // TODO filter
	// $_POST contient deja le contexte $idPokemon à cause du champs hidden, 
	// pas besoin de combiner, sinon ce serait : 
	// $apparition['idPokemon'] = $_GET['pokemon']; // TODO filter
	include_once "../../accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$apparitionDao->ajouterApparition($apparition); 
}

?>