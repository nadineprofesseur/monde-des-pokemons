<?php 
	$base = "mondepokemon";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "testtest";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);

	$requeteListePokemons = $basededonnees->prepare("SELECT * FROM pokemon");
	$requeteListePokemons->execute();
	// $pokemon1 = $requeteListePokemons->fetch();
	// print_r($pokemon1);
	$listePokemon = array();
	$position = 0;
	while($pokemon = $requeteListePokemons->fetch())
	{
		//echo "<div>";
		//print_r($pokemon);
		//echo "</div>";
		$listePokemon[$position++] = $pokemon;
	}
	/*
	echo "<pre>";
	var_export($listePokemon);
	echo "</pre>";
	*/
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1></h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
	
		<?php
		foreach($listePokemon as $pokemon)
		{?>
		<div>
			<div><?=$pokemon['nom']?></div>
		</div>
		<?php
		}
		?>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>