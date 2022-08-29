<?php 
session_start();
require_once 'database.php';
$our_team = true;
  require_once "dash_header.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Partnes</h4>
                  <p class="card-category">Complete your Partnes</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="partners_post.php" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="">
                          <label class="bmd-label-floating">Partnes Icon</label>
                          <input type="file" class="form-control" name="partners_icon">
                        </div>
                      </div>

                    </div>

                    <button type="submit" class="btn btn-primary ">Update Our Partners</button>

                    <hr>
                  <h6>Add Team</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold">Photo</th>
                        <th class="font-weight-bold">Edite/Delete</th>
                      </tr>
                    </thead>
                
                    <?php foreach(unika_unika("partners") as $single_team) : ?>
              
                    <tbody>
                      <tr>
                        <td><?= $single_team['partners_icon'] ?></td>
                        <td>
                          <a href="partners_delete.php?id=<?= $single_team['id'] ?>" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  <?php endforeach ?>
                  </table>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
     

  <?php require_once "dash_footer.php"; 
  session_unset();
  ?>