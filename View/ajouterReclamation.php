<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';
   
   

    $error = "";

    // create reclamation
    $reclamation = null;

    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        
        isset($_POST["nom"]) &&       
        isset($_POST["prenom"]) &&
        isset($_POST["nomUtilisateur"]) &&
        isset($_POST["email"]) &&
        
        isset($_POST["explication"])
    ) {
        if (
            
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["nomUtilisateur"]) &&
            !empty($_POST["email"]) &&
            
            !empty($_POST["explication"])
        ) {
            $reclamation = new reclamation(
               
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['nomUtilisateur'],
                $_POST['email'],
                
                $_POST['explication']
            );
            $reclamationC->ajouterReclamation($reclamation);
            
        }
        else
            $error = "Missing information";
    }

    
    
    
?>

<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets1/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets1/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  

    <title>Reclamation</title>
  </head>

<body>

<!--menu-->
  

<div class="page sub-page"></div>

<header class="hero has-dark-background">
    <div class="hero-wrapper">

        <div class="secondary-navigation">
            <div class="container">
                <ul class="left">
                    <li>
                        <span>
                            <i class="fa fa-phone"></i> +216 41 220 555
                        </span>
                    </li>
                </ul>

                <ul class="right">

                <li>
                            <br>
                            <a href="/vitalogicgroupe/view/afficherproduits.php"><i class="fa fa-panier"></i>shop</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/eventfront.php"><i class="fa fa-panier"></i>events</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/afficheranimals.php"><i class="fa fa-panier"></i>adoption</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/ajouterReclamation.php"><i class="fa fa-panier"></i>reclamation</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/my-profile.php" ><i class="fa fa-panier"></i>profile</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/home.php"><i class="fa fa-panier"></i>logout</a>
                           
                        </li>
                        
                       
                </ul>

            </div>

        </div>

        <div class="main-navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">

                <img src="assets1/img/logo-inverted.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbar">



                    </div>

                    <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse" aria-expanded="false" aria-controls="collapseMainSearchForm">
                        <i class="fa fa-search"></i>
                        <i class="fa fa-close"></i>
                    </a>

                </nav>



            </div>

        </div>

        <div class="collapse" id="collapseMainSearchForm">
            <form class="hero-form form">
                <div class="container">

                    <div class="main-search-form">
                        <div class="form-row">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="what" class="col-form-label">Research?</label>
                                    <input name="keyword" type="text" class="form-control small" id="what" placeholder="Research?">
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="category" class="col-form-label">Category?</label>
                                    <select name="category" id="category" class="small" data-placeholder="Select Category">
                                            <option value="">Select Category</option>
                                            <option value="1">Eco-friendly products</option>
                                            <option value="2">All pets products</option>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-primary width-100 small">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="alternative-search-form">
                        <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                        <div class="collapse" id="collapseAlternativeSearchForm">
                            <div class="wrapper">
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                        <label>
                                                <input type="checkbox" name="epicerie bio">
                                                epicerie bio
                                            </label>
                                        <label>
                                                <input type="checkbox" name="cosmetique">
                                                cosmetique
                                            </label>
                                        <label>
                                                <input type="checkbox" name="produits de menage">
                                               produits de menage
                                            </label>
                                         <label>
                                                <input type="checkbox" name="alimentation animaux ">
                                                alimentation animaux
                                            </label>
                                         <label>
                                                <input type="checkbox" name="jouets">
                                               jouets
                                            </label>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="page-title">
            <div class="container">
                <h1>Reclamation</h1>
            </div>
        </div>
        <div class="background">
            <div class="background-image">
                <img src="assets1/img/backgroun3.jpg" alt="">
            </div>
        </div>
    </div>
</header>


<!--contaaact formulaire reclamation-->
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post" onsubmit = "envoie()" >
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Reclamation</h2>
                  </div>
                  
                  <div class="col-lg-4">
                    <fieldset>
                    name 
                      <input name="nom" type="text" id="nom" class="form-control" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      prenom
                      <input name="prenom" type="text" id="prenom" class="form-control" placeholder="YOURLASTNAME...*" required="">
                    </fieldset>
                  </div>

                  <div class="col-lg-4">
                    <fieldset>
                      psuedo
                      <input name="nomUtilisateur" type="text" id="nomUtilisateur" class="form-control" placeholder="username...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      email
                    <input name="email" type="text" id="email" class="form-control" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  <fieldset>
                  </div>
                  <hr>



                    <div class="col-lg-12">
                    <h2></h2>
                    </div>  
                   
                    
                    


<!--
                     <div class="col-lg-4">
                    <fieldset>

<div class ="check">
   <div class="row" >
       <input class="col" type="radio" value="harcelement" name="typer" id="harcelement" >
       <label class="col" for="radio">harcelement</label>   
       
   </div>
   <div class="row ">

   
       <input class="col" type="radio" value="contenue" name="typer" id="contenue">
       <label class="col" for="radio2">contenue</label>
      
   </div>
   <div class="row">
   
   
       <input class="col" type="radio" value="divers"  name="typer" id="divers">
       <label class="col" for="radio2">divers</label>
           </div>
           
 </fieldset>
</div>


<div class="col-lg-4" >
                    <fieldset>

<div class ="check" hidden id="suite_harcelement">
   <div class="row" >
       <input class="col" type="radio" value="harcelement" name="typer" id="radio">
       <label class="col" for="radio">harcelement</label>   
       
   </div>
   <div class="row ">

   
       <input class="col" type="radio" value="contenue" name="typer" id="radio">
       <label class="col" for="radio2">contenue</label>
      
   </div>
   <div class="row">
   
   
       <input class="col" type="radio" value="divers"  name="typer" id="radio">
       <label class="col" for="radio2">divers</label>
           </div>
           
 </fieldset>
</div>


<div class="col-lg-4" >
                    <fieldset>

<div class ="check" hidden id="suite_contenue">
   <div class="row" >
       <input class="col" type="radio" value="harcelement" name="typer" id="radio">
       <label class="col" for="radio">contenue inaproprie</label>   
       
   </div>
   <div class="row ">

   
       <input class="col" type="radio" value="contenue" name="typer" id="radio">
       <label class="col" for="radio2">contenue malveillant</label>
      
   </div>
   <div class="row">
   
   
       <input class="col" type="radio" value="divers"  name="typer" id="radio">
       <label class="col" for="radio2">arnaque</label>
           </div>
           
 </fieldset>
</div>
  -->

               
                     
                    

     
        
        
      </select>
   

                   </fieldset>
                  </div>

                 

                     <div class="col-lg-12">
                    <h2>explication</h2>
                      </div>
                    <fieldset>
                      <textarea name="explication" type="text" class="form-control" id="explication" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                    <td>
                        <input type="submit" value="Envoyer">
                    </td>
                    <td>
              </form>





              

                            <div id="confirmation" hidden >votre requete a ete enregistre </div>

                          </div>
                        </div>
                      </div>

        
     
      </div>
    </div>

    <div class="footer" style="position: relative;top: 40px; left: 40px;">
    <div class="footer-container">
      <div class="footer-top" >
        <h1>vitalogic</h1>
        <ul class="link-list">

        </ul>
        <div class="social-media-footer">
          <p><i class="fab fa-facebook"></i></p>
          <p><i class="fab fa-instagram"></i></p>
          <p><i class="fab fa-snapchat-square"></i></p>
          <p><i class="fab fa-pinterest-square"></i></p>
          <p><i class="fab fa-youtube"></i></p>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-left">
          Created by Group 6
        </div>
        <div class="footer-copyright-right">
          &copy; 2021-2022
        </div>
      </div>
    </div>
  </div>
  

  <script src="assets1/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets1/js/popper.min.js"></script>
    <script type="text/javascript" src="assets1/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets1/js/selectize.min.js"></script>
    <script src="assets1/js/masonry.pkgd.min.js"></script>
    <script src="assets1/js/icheck.min.js"></script>
    <script src="assets1/js/jquery.validate.min.js"></script>
    <script src="assets1/js/custom.js"></script>
</body>

</body>
</html>