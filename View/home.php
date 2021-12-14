<?php
session_start();
if(isset($_SESSION["role"])){
$_SESSION["role"] = "user";
}
else{$_SESSION["role"] = "visiteur";}

?>
<!doctype html>

<html lang="en" >

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
    <link rel="stylesheet" href="assets1/css/neder.css">
    

    <title>HOME VITALOGIC</title>

</head>


<body style="background-image: url('assets1/img/backgroun3.jpg');" >
  
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
                            <a href="/vitalogicgroupe/view/register.php"><i class="fa fa-panier"></i>Register</a>
                           
                        </li>
                        <li>
                            <br>
                            <a href="/vitalogicgroupe/view/sign-in.php"><i class="fa fa-panier"></i>sign in</a>
                           
                        </li>
                        
                      
                       
                    </ul>

                </div>

            </div>
            <div class="background">
                <div class="background-image">
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
            </div>
</div>

        </header>
    <script src="assets1/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets1/js/popper.min.js"></script>
    <script type="text/javascript" src="assets1/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets1/js/selectize.min.js"></script>
    <script src="assets1/js/masonry.pkgd.min.js"></script>
    <script src="assets1/js/icheck.min.js"></script>
    <script src="assets1/js/jquery.validate.min.js"></script>
    <script src="assets1/js/custom.js"></script>
<style>
    h1{
        font-family: "Arial Black", Gadget, sans-serif;
font-size: 32px;
letter-spacing: 2px;
word-spacing: 2px;
color: #FFFFFF;
font-weight: 400;
text-decoration: rgb(68, 68, 68);
font-style: italic;
font-variant: normal;
text-transform: uppercase;
    }
</style>

    <h1 style="margin-left:32%; margin-top:15%; ">BIENVENUE DANS VITALOGIC</h1>
    

    <h1 style="margin-left:28%;  ">Sauvons la planète ensemble </h1>
</body>

</html>