<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$reclamationC->supprimer_reclamation($_GET["nomUtilisateur"]);
	header('Location:afficherListeReclamation.php');
?>   