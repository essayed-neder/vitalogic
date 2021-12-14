<?php
	class categoriea{
		
		private $nom=null;
		
		
		function __construct( $nom){
			
			$this->nom=$nom;
		}
		function getNom(){
			return $this->nom;
        }
		function setNom(string $nom){
			$this->nom=$nom;
		}
		
		
	}


?>
