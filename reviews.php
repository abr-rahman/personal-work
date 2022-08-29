<?php 
session_start();
require_once 'database.php';
$reviews = true;
  require_once "dash_header.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header bg-dark ">
                  <h4 class="card-title text-white">Edit Reviews</h4>
                  <p class="card-category text-white">Complete your Reviews</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="reviews_post.php">
                    <div class="row">
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Message</label>
                          <input type="text" class="form-control" name="message">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Update Reviews</button>

                    <hr>
                  <h6>Add Reviews</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold">Name</th>
                        <th class="font-weight-bold">Message</th>
                        <th class="font-weight-bold">Edite/Delete</th>
                      </tr>
                    </thead>
                
                    <?php foreach(unika_unika("reviews") as $single_reviews) : ?>
              
                    <tbody>
                      <tr>
                        <td><?= $single_reviews['name'] ?></td>
                        <td><?= $single_reviews['message'] ?></td>
                        <td>
                          <a href="reviews_delete.php?id=<?= $single_reviews['id'] ?>" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Delete</a>
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