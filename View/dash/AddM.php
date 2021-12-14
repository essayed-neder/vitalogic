<?php
session_start();
include '../../Controller/UserController.php';
$userC = new UserContoller();
$error = "";
// create adherent
$user = null;
// $listeQuestion=$reponseC->afficherQuestions(); 
if (

 isset($_POST["username"]) &&		
 isset($_POST["password"]) &&
 isset($_POST["email"]) 
 
) {
 if (
    
     !empty($_POST['username']) &&
     !empty($_POST["password"]) &&
     !empty($_POST["email"]) 
    // !empty($_POST["CategorieId"])
 ) {
     $user = new User(

         $_POST['username'],
         $_POST['email'], 
         MD5($_POST["password"]),
         'USER'
     
     );
     $userC->ajouterUtilisateur2($user);
    
 }
 else
     $error = "Missing information";
 }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Show Members</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?>
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include "segments/header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "segments/side_bar.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>



            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">


                  <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            
                            <form class="form clearfix" method="POST">
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">Name</label>
                                    <input name="username" type="text" class="form-control" id="username" placeholder="Name" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="repeat_password" class="col-form-label required">Repeat Password</label>
                                    <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Repeat Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="newsletter" value="1">
                                        Confirm
                                    </label>
                                    <input type="submit" class="btn btn-primary" value="ADD"></input>
                                </div>
                            </form>
                            <hr>
                          
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>


         <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                
                
              </div>
            </div>
            <?php include "segments/footer.php"; ?>
  </body>
</html>