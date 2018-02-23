<?php 

	//include "action/action-ajouter-apparition.php";
	//include "action/action-effacer-apparition.php";
	
	$idPokemon = filter_var($_GET["pokemon"], FILTER_SANITIZE_NUMBER_INT);
	
	include "../accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$listeApparitions = $apparitionDao->listerApparitionDePokemon($idPokemon);	
	//print_r($listeApparitions);
?>
	
	<section id="contenu">
		<header><h2>Liste des apparitions</h2></header>
	
		<div>
		<a href="ajouter-pokemon.html">Ajouter une apparition</a>
		</div>
	
		<?php
		foreach($listeApparitions as $apparition)
		{
		?>
		<div>
			<div>
				Apparition <?=$apparition['episode']?>
			</div>
		</div>
		<?php
		}
		?>
	
	</section>
