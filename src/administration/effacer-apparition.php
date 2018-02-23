<?php
	$idApparition = filter_var($_GET['apparition'], FILTER_SANITIZE_NUMBER_INT);
	//echo $idApparition;
	
	include "../accesseur/ApparitionDAO.php";
	$apparitionDao = new ApparitionDAO();
	$apparition = $apparitionDao->lireApparition($idApparition);
	//print_r($apparition);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Monde des Pokémons - Administration</title>
</head>
<body>
	<header>
		<h1>Monde des Pokémons - Administration</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Effacer une apparition de pokemon</h2></header>
		<form method="post" action="action/action-effacer-apparition.php">
			
			<input type="hidden" name="id" value="<?=$apparition['idApparition']?>"/>

			Voulez-vous vraiment effacer l'apparition de l'episode <?=$apparition['episode']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-apparition" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>