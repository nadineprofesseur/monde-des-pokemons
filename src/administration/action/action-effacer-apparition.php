<?php 
if(!empty($_POST['action-effacer-apparition']))
{
	echo "action-effacer-apparition";
	print_r($_POST);

	if(!empty($_POST['confirmation-oui']))
	{		
		//$idApparition = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		//include_once "../accesseur/ApparitionDAO.php";
		//$apparitionDao = new apparitionDAO();
		//$apparitionDao->apparitionPokemon($idApparition);
	}
	else
	{
	?>
	Vous ne voulez pas supprimer l'apparition
	<?php	
	}
}
	?>