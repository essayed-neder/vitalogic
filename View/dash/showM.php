<?php
session_start();
include '../../Controller/UserController.php';
$userC = new UserContoller();
$liste = $userC->afficherUtilisateur();
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



            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Modals Triggering</h3>
                        <br>
                   
                    <a  href="listeutilisateurtri.php" class="btn btn-warning btn-fw">ORDER BY ALPHABETIC</a>
                    </div>

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-cells-middle">
                                <thead class="text-dark">
                                  
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col" >Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                <?php
foreach ($liste as $user)
{
?>
                                    <tr>
                                                      <td><?php echo $user['id']; ?></td>
                    <td class="tm-product-name"><?php echo $user['email']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    
                   
                    <?php if ($user['role'] == 'ADMIN')
    { ?>
                    <td>
					<form method="POST" action="modifierutilisateur.php?id=<?php echo $user['id']; ?>">
						<input type="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
					</form>
				     </td>

             <?php
    } ?>

         
				<td>
				<a href="supprimerutilisateur.php?id=<?php echo $user['id']; ?>"  class="tm-product-delete-link" >
				<i class="mdi mdi-delete-circle icon-md text-dark"></i>
			</a>
   
          </td>
                    <?php if ($user['role'] == 'USER')
    { ?>
                    <td>
                                  
                   
                   
       
                    <a  href="admin.php?id=<?php echo $user['id']; ?>"  class="btn btn-warning btn-fw">Set as ADMIN</a>
                    </td>
                    <?php
    } ?>
                                    </tr>
                                    <?php
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
          </div>
          </div>
                </div>
              </div>
             
             
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Ecotopia 2020</span>
                
              </div>
            </div>
            <?php include "segments/footer.php"; ?>
  </body>
</html>
