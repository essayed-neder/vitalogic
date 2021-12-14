<?php

include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicgroupe/config.php";

class Evenement{

        
    private string $matricule_evenement;
    private string $nom;
    private string $description;
    private string $lieu;
    private string $date;
    private string $quartier;

    public function __construct(string $matricule_evenement, string $nom,string $description,string $lieu,string $date,string $quartier){
        $this->matricule_evenement = $matricule_evenement;
        $this->nom = $nom;
        $this->description = $description;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->quartier = $quartier;
        //$this->registrationDate = date('y-m-d');
        //$this->userId = generateUserId($userType);
    }

    public function getmatricule_evenement():string{
        return $this->matricule_evenement;
    }
    public function getnom():string{
        return $this->nom;
    }
    public function getdescription():string{
        return $this->description;
    }
    public function getlieu():string{
        return $this->lieu;
    }
    public function getdate():string{
        return $this->date;
    }
    public function getquartier():string{
        return $this->quartier;
    }

    public function setmatricule_evenement($matricule_evenement):void{
        $this->matricule_evenement=$matricule_evenement;
    }
    public function setnom($nom):void{
        $this->nom=$nom;
    }
    public function setdescription($description):void{
        $this->description=$description;
    }
    public function setlieu($lieu):void{
        $this->lieu=$lieu;
    }
    public function setdate($date):void{
        $this->date=$date;
    }
    public function setquartier($quartier):void{
        $this->quartier=$quartier;
    }
}



    class eventC{


        function supprimerEvenement($matricule_evenement){

            $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
            mysqli_select_db($host,"gestionutilisateur")or die("cannot select DB");
            $sql="DELETE FROM evenement WHERE matricule_evenement = '$matricule_evenement'";
            $req=mysqli_query($host,$sql);



         /*   $db=config::getConnexion();
            var_dump($matricule_evenement);
            try {
                $query = $db->prepare(
                    "DELETE FROM evenement WHERE matricule_evenement = '$matricule_evenement'"
                );
                $query->execute([
                    'matricule_evenement' => $matricule_evenement
                ]);
            } 
            catch (PDOException $e) {
                $e->getMessage();
            } */
        }



        function ajouter_evenement($newEvent){
            $db=config::getConnexion();
            
            try {
                $query = $db->prepare(
                    'INSERT INTO evenement (matricule_evenement,nom,description,lieu,date,quartier) 
                        VALUES (:matricule_evenement,:nom,:description,:lieu,:date,:quartier)'
                );// INSERT INTO 'nom_de_la_table'
                $query->execute([
                    'matricule_evenement' => $newEvent->getmatricule_evenement(),
                    'nom' => $newEvent->getnom(),
                    'description' => $newEvent->getdescription(),
                    'lieu' => $newEvent->getlieu(),
                    'date' => $newEvent->getdate(),
                    'quartier' => $newEvent->getquartier()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


  

    function modifier($matricule_evenement,$nom,$description,$lieu,$date,$quartier){
        
        
        /* $host=mysqli_connect("localhost", "root", "")or die("cannot connect");
            mysqli_select_db($host,"gestionutilisateur")or die("cannot select DB");
            $sql="DELETE FROM evenement WHERE matricule_evenement = '$matricule_evenement'";
            $req=mysqli_query($host,$sql); */
        
        
        
        
        $db = config::getConnexion();
        try{
            $query = $db->prepare(
                "UPDATE evenement SET nom = '$nom', description = '$description', lieu = '$lieu', date ='$date', quartier ='$quartier'  WHERE matricule_evenement = '$matricule_evenement' "
            );
            $query = $query->execute(
                
            );
        }catch(PDOException $e){
            $e->getMessage();
        }
    }

    function add_participation($id,$matricule_evenement){
        $db = config::getConnexion();

        try {
            $query = $db->prepare(
                'INSERT INTO participer (matricule_evenement,id) 
                    VALUES (:matricule_evenement,:id)'
            );
            $query->execute([
                'matricule_evenement' => $matricule_evenement,
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    
}
    
  

?>