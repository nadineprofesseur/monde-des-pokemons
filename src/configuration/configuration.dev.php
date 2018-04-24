<?php

	// Configurations de téléversement et médias
	$site = new stdClass();
	$site->chemin = new stdClass();
	//$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/monde-pokemons/src/';
	$site->chemin->racine = 'C:\Bitnami\wampstack-7.1.13-1\apache2\htdocs\monde-pokemons\src\\';
	$site->chemin->illustration = $site->chemin->racine . 'illustration\\';
	$site->chemin->miniature = $site->chemin->racine . 'illustration\mini\\';
	$site->url = new stdClass();
	$site->url->racine = 'http://localhost/monde-pokemons/src/';
	$site->url->illustration = 'http://localhost/monde-pokemons/src/illustration/';
	$site->url->miniature = 'http://localhost/monde-pokemons/src/illustration/mini/';
	
	// Configurations pour la traduction
	$traduction = new stdClass();
	$traduction->chemin = $site->chemin->racine . 'locale/';
	$traduction->domaine = 'messages';
	$traduction->locale = 'en_CA'; // $locale = "en_CA";
	$traduction->locales = ['fr_CA','en_CA'];
	
	