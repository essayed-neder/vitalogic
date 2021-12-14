<?PHP
    include "../Controller/reclamationC.php";
	$reclamation = new reclamationC();
	$resultat=$reclamation->afficherreclamation(); ?>
	


<!DOCTYPE html>
<html>
	<head>
	<title>Reclamation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets2/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets2/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets2/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets2/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body onload="window.print()">
	<FONT size="10pt" style="position:relative; left: 600px;"> <span encadrer-un-contenu{ border: 1px solid black; padding: 5px; } >Objet :Reclamation </span></h5></FONT>
	<br>
	<br>
	<br>
	<br>
		
	

	<FONT size="6pt">Detail du reclamation : </FONT>
			<br scope="col"> <div style="position:relative; left: 100px;"> <FONT size="3pt">ID reclamation : <?php echo $_GET['id_reclamation'] ?></br> 
        
        <br scope="col"> <FONT size="3pt">nom : <?php echo $_GET["nom"] ?> </br>
         <br scope="col"> <FONT size="3pt" >prenom : <?php echo $_GET["prenom"] ?></br>
		 <br scope="col"><FONT size="3pt">psuedo : <?php echo $_GET["nomUtilisateur"] ?></br>
		 <br scope="col"> <FONT size="3pt">email : <?php echo $_GET["email"] ?></br> </div>
		 <br scope="col"> <FONT size="6pt">explication : </br> </FONT>
		 <br> <FONT size="5pt"> <?php echo $_GET["explication"] ?> </FONT>
			
               
                
				
			

			
            		
                    

			
					
	
				

			












<p style="position:relative: right 40px;">
	<img src="assets2/sig.png" align=right> </p>

		
	</body>
</html>