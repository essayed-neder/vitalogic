<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New Event</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?>
    <script src="https://cdn.tiny.cloud/1/4avatqxpxn93pmv0nn2v5rsgo6xv2ysad25jn86kv7sulge6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#myEditor',
      branding: false,
      plugins: 'link image table',
      contextmenu: 'link image table',
      draggable_modal: true,
    });
  </script>
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
         
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Event information</h4>
                    
                    <form class="forms-sample" action="../recuperation.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Event Name</label>
                        <input type="text" class="form-control" id="nom" name="nom" >
                        <span id="verifnom" style="color: red;"></span><br>
                      </div>
                      <div class="form-group">
                                        <label for="name" class="col-form-label required">Event number</label>
                                        <input  type="text" class="form-control" id="matricule" name="matricule"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                                    <label for="date" class="col-form-label">Event Date</label>
                                    <input name="date" type="date" class="form-control" id="date">
                                    <span id="verifdate" style="color: red;"></span><br>
                       </div>
                       <div class="form-group">
                                        <label for="city" class="col-form-label required">City</label>
                                        <input name="lieu" type="text" class="form-control" id="lieu">
                        </div>
                        <div class="form-group">
                                        <label for="street" class="col-form-label">Street</label>
                                        <input name="quartier" type="text" class="form-control" id="quartier">
                        </div>
                    
                      <button type="submit" id="send" class="btn btn-primary mr-2">Send</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <script src="../traitement.js">
                </script>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include "segments/footer.php"; ?><!-- End custom js for this page -->
  </body>
</html>