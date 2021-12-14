<?php

    include "../config.php";
    class reclamationC{
        function afficherReclamation(){
            $sql="SELECT * FROM reclamation";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }
        function supprimer_reclamation($nomUtilisateur){
			$sql="DELETE FROM reclamation WHERE nomUtilisateur=:nomUtilisateur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':nomUtilisateur', $nomUtilisateur);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
        }


        function ajouterReclamation($reclamation){
            $sql="INSERT INTO reclamation (nom, prenom, nomUtilisateur, email, explication ) 
			VALUES (:nom,:prenom,:nomUtilisateur,:email,:explication )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    
				   'nom' =>$reclamation->getNom() , 
                   'prenom' =>$reclamation->getPrenom(),
                   'nomUtilisateur' =>$reclamation->getNomUtilisateur(),
                   'email' =>$reclamation->getEmail(),                  
                   'explication' =>$reclamation->getExplication(),
                  

                
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    }
?>