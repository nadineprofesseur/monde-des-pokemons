<?php
	$idApparition = filter_var($_GET["apparition"], FILTER_SANITIZE_NUMBER_INT);
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
		<header><h2>Modifier une apparition</h2></header>
		<form method="post" action="action/action-modifier-apparition.php?apparition=<?=$idApparition?>">
		
			<div>
				<label for="episode">Épisode</label>
				<input type="text" name="episode" id="episode"/>
			</div>
		
			<div>
				<label for="description">Description</label>
				<textarea name="description" id="description"></textarea>
			</div>
			
			<div>
				<label for="majeur">Majeur</label>
				<select name="majeur" id="majeur">
					<option value="1">Oui</option>
					<option value="0">Non</option>
				</select>
			</div>
												
			<input type="submit" name="action-ajouter-apparition" value="Enregistrer"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>