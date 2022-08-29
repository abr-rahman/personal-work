<?php 
session_start();
require_once 'database.php';
$setup = true;
  require_once "dash_header.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header bg-dark ">
                  <h4 class="card-title text-white">Edit Price</h4>
                  <p class="card-category text-white">Complete your Price</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="setup_post.php">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating h6">Author Name</label>
                          <input type="text" class="form-control" name="author_name" value="<?= setup('setups', 'author_name') ?>">
                        </div>
                      </div>    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating h6">E-mail</label>
                          <input type="email" class="form-control" name="email" value="<?= setup('setups', 'email') ?>">
                        </div>
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating h6">Phone NUmber</label>
                          <input type="number" class="form-control" name="phone_number" value="<?= setup('setups', 'phone_number') ?>">
                        </div>
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating h6">Address</label>
                          <input type="text" class="form-control" name="address" value="<?= setup('setups', 'address') ?>">
                        </div>
                      </div> 
                    </div>
                    <button type="submit" class="btn btn-primary ">Edite </button>
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