<?php
include_once '../../Model/animal.php';
include_once '../../Controller/animalC.php';


 $animal = null;
// create an instance of the controller
$animalC = new animalC();




 $animal = new animal($_POST['nom'],$_POST['urlimage'],$_POST['description'],$_POST['idcategorie']);
 



$animalC->modifieranimals($animal, $_POST["id"]);

header('Location:showA.php');



?>