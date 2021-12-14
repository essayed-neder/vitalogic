<!DOCTYPE html>
<html lang="en">
<?php //on inclut notre fichier de connection $pdo = Database::connect(); //on se connecte à la base $sql = 'SELECT * FROM user ORDER BY id DESC'; //on formule notre requete foreach ($pdo->query($sql) as $row) { //on cree les lignes du tableau avec chaque valeur retournée
                          include "../Controller/reclamationC.php";
                         $reclamation = new reclamationC();
                         $resultat=$reclamation->afficherreclamation(); ?>
<head>
<meta charset="utf-8" />
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VITALOGIC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/vitalogic-logo.png" />

</head>


<body>

<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/vitalogic-6logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/vitalogic-6logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">  

            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Henry Klein</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <!---<div class="p-3 text-center bg-primary">
                  <p class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                </div>--->
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Events</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="dash/addE.php">Add Event</a></li>
                  <li class="nav-item"> <a class="nav-link" href="dash/Eventsphp">Show Events</a></li>
                </ul>
              </div>
            </li>
            <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                <span class="menu-title">Membres</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="dash/showM.php">Show Members</a></li>
                  <li class="nav-item"> <a class="nav-link" href="dash/addM.php">ADD Members</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Reclamation</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="ajouterReclamation.php">Add reclamation</a></li>
                  <li class="nav-item"> <a class="nav-link" href="afficherListeReclamation.php">Show reclamations</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-briefcase menu-icon"></i></span>
                <span class="menu-title">Shop</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="dash/addP.php">Add Product</a></li>
                  <li class="nav-item"> <a class="nav-link" href="dash/showP.php">Show Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href="dash/addCat.php">Add Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="dash/showCAT.php">Show Categories</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-briefcase menu-icon"></i></span>
                <span class="menu-title">Adoption</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic5">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="addA.php">Add Animal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="showA.php">Show Animals</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-telegram menu-icon"></i></span>
                <span class="menu-title">Panier</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic6">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="dash/showC.php">Show panier</a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item documentation-link">
              <a class="nav-link" href="ajouterReclamation.php" target="_blank">
                <span class="icon-bg">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">Check website</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
              <a class="nav-link" href="../logout.php" target="_blank">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Liste des Reclamations</h4>

           

        </div>
      </div>
    </div>
    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher Reclamation" title="type in a name" />
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            
              <i class="zmdi zmdi-search"></i>
            </button>
          </form>
          
    <div id="google_translate_element"></div>
     <script type="text/javascript">
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
         }
     </script>

     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- end page title -->

    
        <!-- end card -->
      
    
      <script>
function myFunction() {
    var input, filter, table, tr, td,tp, i, txtValue,j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
       
        td = tr[i].getElementsByTagName("td")[0];
        
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>


<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        
        <div class="row">
                        <div class="col-lg-9">
            <br>
                            <h2 class="title-1 m-b-25">Informations Gérer Commandes</h2> 
                            <div id="google_translate_element"></div>
     <script type="text/javascript">
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
         }
     </script>

     <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                            
                            <table id="dataTable" class="table table-borderless table-striped table-earning" >
                               

                                <thead class="thead-dark">
<tr>
   
    <th scope="col">ID reclamation</th>
    
    <th scope="col">nom</th>
     <th scope="col">prenom</th>
 <th scope="col">psuedo</th>
 <th scope="col">email</th>
 <th scope="col">explication</th>
     
  
  
    


</tr>
</thead>
<?php

foreach ($resultat as $row)
{
$l=0;



?>    

    <tr valign="middle">
        
        <td ><?php echo $row['id_reclamation'] ?></td>
        
       
        
         <td >
         <?php echo $row["nom"] ?>
       </td>
        <td><?php echo $row["prenom"] ?></td>
   
       
        <td ><?php echo $row["nomUtilisateur"] ?></td>
            

    <td ><?php echo $row["email"] ?></td>
            <td> <?php echo $row["explication"] ?> </td>
            
     
     
    



                       
                                                   
    <td <center> <form action="editer.php" method="get">
              <input type="hidden" id="id_reclamation" name="id_reclamation" value="<?php echo $row["id_reclamation"] ?>">
              <input type="hidden" id="nom" name="nom" value="<?php echo $row["nom"] ?>">
              <input type="hidden" id="prenom" name="prenom" value="<?php echo $row["prenom"] ?>">
              <input type="hidden" id="nomUtilisateur" name="nomUtilisateur" value="<?php echo $row["nomUtilisateur"] ?>">
              <input type="hidden" id="email" name="email" value="<?php echo $row["email"] ?>">
              <input type="hidden" id="explication" name="explication" value="<?php echo $row["explication"] ?>">
      <button  class="btn btn-primary" href="editer.php">Read</button></td>
            </form></center>
    
    <td <center> <form action="update.php" method="get">
              <input type="hidden" id="id_reclamation" name="id_reclamation" value="<?php echo $row["id_reclamation"] ?>">
              <input type="hidden" id="nom" name="nom" value="<?php echo $row["nom"] ?>">
              <input type="hidden" id="prenom" name="prenom" value="<?php echo $row["prenom"] ?>">
              <input type="hidden" id="nomUtilisateur" name="nomUtilisateur" value="<?php echo $row["nomUtilisateur"] ?>">
              <input type="hidden" id="email" name="email" value="<?php echo $row["email"] ?>">
              <input type="hidden" id="explication" name="explication" value="<?php echo $row["explication"] ?>">
               <button  class="btn btn-success" href="update.php" >Update</button></td>
            </form></center>

    <td <center> <form action="Supprimer.php" method="get">
              <input type="hidden" id="id_reclamation" name="id_reclamation" value="<?php echo $row["id_reclamation"] ?>">
              <input type="hidden" id="nom" name="nom" value="<?php echo $row["nom"] ?>">
              <input type="hidden" id="prenom" name="prenom" value="<?php echo $row["prenom"] ?>">
              <input type="hidden" id="nomUtilisateur" name="nomUtilisateur" value="<?php echo $row["nomUtilisateur"] ?>">
              <input type="hidden" id="email" name="email" value="<?php echo $row["email"] ?>">
              <input type="hidden" id="explication" name="explication" value="<?php echo $row["explication"] ?>">
               <button  class="btn btn-danger" href="Supprimer.php">Delete</button></td>
            </form></center>

     

    <td <center> <form action="imprimerReclamation.php" method="get">
              <input type="hidden" id="id_reclamation" name="id_reclamation" value="<?php echo $row["id_reclamation"] ?>">
              <input type="hidden" id="nom" name="nom" value="<?php echo $row["nom"] ?>">
              <input type="hidden" id="prenom" name="prenom" value="<?php echo $row["prenom"] ?>">
              <input type="hidden" id="nomUtilisateur" name="nomUtilisateur" value="<?php echo $row["nomUtilisateur"] ?>">
              <input type="hidden" id="email" name="email" value="<?php echo $row["email"] ?>">
              <input type="hidden" id="explication" name="explication" value="<?php echo $row["explication"] ?>">
              <button  class="btn btn-light" type="submit" ><span class="fa fa-print fa-2x"></span></button></td>
            </form></center>
                                                   
                                                  
                       
                      
                                      
    
                        

      
           
             

              

              

     
        
   
        
    </tr>
   
<?php
}


?>   
  

</body>
