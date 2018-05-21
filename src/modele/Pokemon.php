<?php 
	class Pokemon
	{	
		protected $nom;
		protected $type;
		protected $generation;
		protected $resume;
		protected $illustration;
		
		public static $filtre = array(
			'nom'=>FILTER_SANITIZE_STRING,
			'type'=>FILTER_SANITIZE_STRING,
			'generation'=>FILTER_SANITIZE_NUMBER_INT,
			'resume'=>FILTER_SANITIZE_STRING);
	
		function __construct($valeurs)
		{
			$valeurs = $this->valeurs = filter_var_array($valeurs, Pokemon::$filtre); 
			
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
		
		public function __get($name)
		{
			if (array_key_exists($name, $this->valeurs)) 
			{
				return $this->valeurs[$name];
			}		
		}
	}
	
	// test
	// $pokemon = new Pokemon(array('nom'=>'nadine'));
	// echo $pokemon->nom;
?>