<?php

include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicgroupe/config.php";
    include_once  $_SERVER['DOCUMENT_ROOT']."/vitalogicgroupe//Model/categorieA.php";
    
	class categorieAC {
        function affichercategories(){
			$sql="SELECT * FROM categoriess";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
        function ajoutercategories($categories){
			$sql="INSERT INTO categoriess (nom) 
			VALUES (:nom )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $categories->getnom(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
				
			}			
		}
		function recuperercategories($id){
			$sql="SELECT * from categoriess where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categories=$query->fetch();
				return $categories;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function modifiercategories($categories, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categoriess SET 
						nom= :nom, 
						
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $categories->getnom(), 
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        function supprimercategories($id){
			$sql="DELETE FROM categoriess WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

    }
    ?>
