<?php 
session_start();
require_once 'database.php';
$skill = true;
  require_once "dash_header.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Skill</h4>
                  <p class="card-category">Complete your Skill</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="skill_post.php">
                    <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject</label>
                          <input type="text" class="form-control" name="subject">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pecentage</label>
                          <input class="form-control" type="range" min="1" max="100" step="1" name="pecentage">
                         
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Update Profile</button>

                    <hr>
                  <h6>Add Skill</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold">Subject</th>
                        <th class="font-weight-bold">Pecentage</th>
                        <th class="font-weight-bold">Edite/Delete</th>
                      </tr>
                    </thead>
                
                    <?php foreach(unika_unika("skill") as $single_skill) : ?>
              
                    <tbody>
                      <tr>
                        <td><?= $single_skill['subject'] ?></td>
                        <td><?= $single_skill['pecentage'] ?>%</td>
                        <td>
                          <a href="about_delete.php?id=<?= $single_skill['id'] ?>" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Delete</a>
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