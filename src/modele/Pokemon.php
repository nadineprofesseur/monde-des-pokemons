<?php 
	class Pokemon
	{	
		public $nom;
		public $type;
		public $generation;
		public $resume;
		public $illustration;
		
		public static $filtre = array(
			'nom'=>FILTER_SANITIZE_STRING,
			'type'=>FILTER_SANITIZE_STRING,
			'generation'=>FILTER_SANITIZE_NUMBER_INT,
			'resume'=>FILTER_SANITIZE_STRING);
	
		function __construct($valeurs)
		{
			$valeurs = filter_var_array($valeurs, Pokemon::$filtre); 

			$this->nom = $valeurs['nom'];
			$this->type = $valeurs['type'];
			$this->generation = $valeurs['generation'];
			$this->resume = $valeurs['resume'];
			//$this->illustration = $valeurs['illustration'];
			
			/*
			$this->filtre['nom'] = FILTER_SANITIZE_STRING;
			$this->filtre['type'] = FILTER_SANITIZE_STRING;
			$this->filtre['generation'] = FILTER_SANITIZE_NUMBER_INT;
			$this->filtre['resume'] = FILTER_SANITIZE_STRING;
			*/
		}
	}
	
?>