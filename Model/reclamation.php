<?php
    class reclamation{
       
        private ?int $id_reclamation= NULL;
        private $nom=null;
        private $prenom=null;
        private $nomUtilisateur=null;
        private $email=null;
        private $explication=null;
  
        function __construct($nom, $prenom, $nomUtilisateur, $email, $explication){
           
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->nomUtilisateur=$nomUtilisateur;
            $this->email=$email;
            $this->explication=$explication;
           
        }
       
        function getNom(){
            return $this->nom;
        }
        function getPrenom(){
            return $this->prenom;
        }
        function getNomUtilisateur(){
            return $this->nomUtilisateur;
        }
        function getEmail(){
            return $this->email;
        }
        
        function getExplication(){
            return $this->explication;
        }



        function setNom(string $nom){
            $this->nom=$nom;
        }
        function setPrenom(string $prenom){
            $this->prenom=$prenom;
        }
        function setNomUtilisateur(string $nomUtilisateur){
            $this->nomUtilisateur=$nomUtilisateur;
        }
        function setEmail(string $email){
            $this->email=$email;
        }


       
        function setExplication(string $explication){
            $this->explication=$explication;
        }
      
       
    }


?>