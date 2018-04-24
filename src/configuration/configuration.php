<?php

	$site = new stdClass();
	$site->chemin = new stdClass();
	$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/monde-pokemons/src/';
	$site->chemin->illustration = $site->chemin->racine . 'illustration/';
	$site->chemin->miniature = $site->chemin->racine . 'illustration/mini/';
	$site->url = new stdClass();
	$site->url->racine = 'http://localhost/monde-pokemons/src/';
	$site->url->illustration = 'http://localhost/monde-pokemons/src/illustration/';
	$site->url->miniature = 'http://localhost/monde-pokemons/src/illustration/mini/';
	
	