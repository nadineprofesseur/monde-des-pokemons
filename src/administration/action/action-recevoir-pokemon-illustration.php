<?php
	require_once "../configuration/configuration.php";
	$champs = 'illustration';
	
	//echo "POST : ";
	//print_r($_POST);

	//echo "FILES : ";
	//echo "<pre>";
	//print_r($_FILES);
	//echo "</pre>";
	
	//echo "<pre>";
	//print_r($_SERVER);
	//echo "</pre>";
	
	$source = $_FILES[$champs]['tmp_name'];
	$destination = $site->chemin->illustration . $_FILES[$champs]['name'];
	
	// 	echo '<div>Source $source </div>'; // ne fonctionne pas
	// 	echo "<div>Source " . $source . "</div>"; // fonctionne mais plus lent
	//echo "<div>Source $source </div>"; 
	//echo '<div>Destination ' . $destination . '</div>';
		
	if(move_uploaded_file($source, $destination))
	{?>
		<!--img src="<?=$site->url->illustration . $_FILES['illustration']['name']?>"/-->
		<img src="<?=$site->url->miniature . $_FILES['illustration']['name']?>"/>
	<?php	
	
	}
	
	$largeurMiniature = 300;
	$hauteurMiniature = 300;
	
	//////////// CHARGEMENT ////////////

	$cheminImageGrande = $site->chemin->illustration . $_FILES[$champs]['name']; 
	$imageSource = imagecreatefromjpeg($cheminImageGrande);
	$dimensionSource = getimagesize($destination);
	$largeurSource = $dimensionSource[0];
	$hauteurSource = $dimensionSource[1];
	
	$imageMiniature = imagecreatetruecolor($largeurMiniature,$hauteurMiniature);
	
	//////////// REDIMENSIONNEMENT ////////////
	
	// Version deformante
	//imagecopyresized(
	//	$imageMiniature, 							$imageSource,
	//	0,0,										0,0,
	//	$largeurMiniature,$hauteurMiniature,		$largeurSource,$hauteurSource);

	// Version qui coupe ce qui dépasse d'un carre
	if($largeurSource > $hauteurSource) $largeurSource = $hauteurSource;
	else $hauteurSource = $largeurSource;
	imagecopyresized(
		$imageMiniature, 							$imageSource,
		0,0,										0,0,
		$largeurMiniature,$hauteurMiniature,		$largeurSource,$hauteurSource);
	
	$cheminMiniature = $site->chemin->miniature . $_FILES[$champs]['name'];
	//echo $cheminMiniature;
	
	//////////// SAUVEGARDE ////////////
	
	// "Affichage" de debug qui colore l'image allouee en rouge pour voir si enregistrement fonctionne
	//$rouge = imagecolorallocate($imageMiniature, 255, 0, 0);
	//imagefill($imageMiniature, 0, 0, $rouge);	
	imagejpeg($imageMiniature, $cheminMiniature, 100);
	//imagejpeg($imageSource, $cheminMiniature, 100);
		
?>