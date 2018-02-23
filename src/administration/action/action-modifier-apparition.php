<?php
if(!empty($_POST['action-modifier-apparition']))
{
	//echo "modifier une apparition";
	$apparition = $_POST; // TODO filter
	$apparition['idApparition'] = $_GET['apparition']; // TODO filter
	include_once "../../accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$apparitionDao->modifierApparition($apparition); 
}

?>