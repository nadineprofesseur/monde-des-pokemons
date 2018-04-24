<?php

	// Configurations de téléversement et médias
	$site = new stdClass();
	$site->chemin = new stdClass();
	$site->chemin->racine = '/var/www/monde-pokemons.com/';
	$site->chemin->illustration = $site->chemin->racine . 'illustration/';
	$site->chemin->miniature = $site->chemin->racine . 'illustration/mini/';
	$site->url = new stdClass();
	$site->url->racine = 'http://www.monde-pokemons.com/';
	$site->url->illustration = 'http://www.monde-pokemons.com/illustration/';
	$site->url->miniature = 'http://www.monde-pokemons.com/illustration/mini/';
	
	// Configurations pour la traduction
	$traduction = new stdClass();
	$traduction->chemin = $site->chemin->racine . 'locale/';
	$traduction->domaine = 'messages';
	$traduction->locale = 'en_CA.utf8'; // $locale = "en_CA";
	$traduction->locales = ['fr_CA.utf8','en_CA.utf8'];
	
	