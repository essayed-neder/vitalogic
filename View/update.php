<?php require '../config.php'; 
      $nomUtilisateur = null; 
      if ( !empty($_GET['nomUtilisateur']))
    { $nomUtilisateur = $_REQUEST['nomUtilisateur']; } 
    if ( null==$nomUtilisateur ) { header("Location: afficherListeReclamation.php"); } 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { 
      $nomError = null; 
      $prenomError = null; 
      $nomUtilisateurError = null; 
      $emailError = null;
      $explicationError = null;
      
// On assigne nos valeurs
       $nom = $_POST['nom']; 
       $prenom = $_POST['prenom']; 
         $nomUtilisateur = $_POST['nomUtilisateur']; 
         $email = $_POST['email'];
         $explication = $_POST['explication'];
         // On verifie que les champs sont remplis 
         $valnomUtilisateur = true; 
         if (empty($nom)) { $nomError = 'Please enter nom'; $valnomUtilisateur = false; } if (empty($prenom)) { $prenomError = 'Please enter your name'; $valnomUtilisateur = false; } if (empty($email)) { $emailError = 'Please enter email$email'; $valnomUtilisateur = false; }  if  (!isset($nomUtilisateur)){ $nomUtilisateurError = 'Please enter website nomUtilisateur'; $valnomUtilisateur = false; } if (empty($explication)) { $explicationError = 'Please enter explication'; $valnomUtilisateur = false; } 
         // mise à jour des donnés 
         if ($valnomUtilisateur) { $pdo = config::getConnexion();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "UPDATE reclamation SET nom = ?, prenom = ?, email = ?, nomUtilisateur = ?, explication = ? WHERE nomUtilisateur = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($nom, $prenom ,$email,$nomUtilisateur ,$nomUtilisateur,$explication));
            // config::disconnect();
             header("Location: afficherListeReclamation.php");
             
         } 
        }else {
            
            $pdo = config::getConnexion();
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "SELECT * FROM reclamation where nomUtilisateur = ?";
             $q = $pdo->prepare($sql);
             $q->execute(array($nomUtilisateur));
             $data = $q->fetch(PDO::FETCH_ASSOC);
             $nom = $data['nom'];
             $prenom = $data['prenom'];
             $email = $data['email'];
             $explication = $data['explication'];
             $nomUtilisateur = $data['nomUtilisateur'];
             
         }
     
     ?>

<!DOCTYPE html>
<html>
<head>
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

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/vitalogic-logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/vitalogic-logo.png" alt="logo" /></a>
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
              <a class="nav-link" href="afficherproduits.php" target="_blank">
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
  

<br />
<div class="container">

<br />
<div class="row">

<br />
<p>

</div>
<p>

<br />
<form method="post" action="update.php?nomUtilisateur=<?php echo $nomUtilisateur ;?>">

<br />
<div class="control-group <?php echo!empty($nomError) ? 'error' : ''; ?>">
                    <label class="control-label">name</label>

<br />
<div class="controls">
                        <input name="nom" type="text"  placeholder="nom" value="<?php echo!empty($nom) ? $nom : ''; ?>">
                        <?php if (!empty($nomError)): ?>
                            <span class="help-inline"><?php echo $nomError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>



<br />
<div class="control-group<?php echo!empty($prenomError) ? 'error' : ''; ?>">
                    <label class="control-label">prenom</label>

<br />
<div class="controls">
                        <input type="text" name="prenom" value="<?php echo!empty($prenom) ? $prenom : ''; ?>">
                        <?php if (!empty($prenomError)): ?>
                            <span class="help-inline"><?php echo $prenomError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>
<br />
<div class="control-group <?php echo!empty($nomUtilisateurError) ? 'error' : ''; ?>">
                    <label class="control-label">nomUtilisateur</label>
 <br />
<div class="controls">
                        <input type="text" name="nomUtilisateur" value="<?php echo!empty($nomUtilisateur) ? $nomUtilisateur : ''; ?>">
                        <?php if (!empty($nomUtilisateurError)): ?>
                            <span class="help-inline"><?php echo $nomUtilisateurError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>
<br />
<div class="control-group <?php echo!empty($emailError) ? 'error' : ''; ?>">
                    <label class="control-label">Email Address</label>

<br />
<div class="controls">
                        <input name="email" type="text" placeholder="Email Address" value="<?php echo!empty($email) ? $email : ''; ?>">
                        <?php if (!empty($emailError)): ?>
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        <?php endif; ?>
</div>






<p>

</div>
<p>







<br />
<div class="control-group <?php echo!empty($explicationError) ? 'error' : ''; ?>">
                    <label class="control-label">explication </label>
                    <br />
<div class="controls">
                        <textarea rows="4" cols="30" name="explication" ><?php if (isset($explication)) echo $explication; ?></textarea>    
                        <?php if (!empty($explicationError)): ?>
                            <span class="help-inline"><?php echo $explicationError; ?></span>
                        <?php endif; ?>
</div>
<p>

</div>
<p>


<br />
<div class="form-actions">
                    <input type="submit" class="btn btn-success" name="submit" value="submit">
                    <a class="btn" href="afficherListeReclamation.php">Retour</a>
</div>
<p>

            </form>
<p>



</div>
<p>




    </body>
</html>