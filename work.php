<?php 
    session_start();
    require_once 'database.php';
    $work = true;
    require_once "dash_header.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header bg-dark ">
                  <h4 class="card-title text-white">Edit Work</h4>
                  <p class="card-category text-white">Complete your Work</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="work_post.php" enctype="multipart/form-data">
                    <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Photo Name</label>
                          <input type="text" class="form-control" name="photo_name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Submitet</label>
                          <input type="text" class="form-control" name="submitet">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="">
                          <label class="bmd-label-floating">Photo</label>
                          <input type="file" class="form-control" name="work_photo">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Update Work</button>

                    <hr>
                  <h6>Add Work</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold">Photo Name</th>
                        <th class="font-weight-bold">Sub..</th>
                        <th class="font-weight-bold">Photo</th>
                        <th class="font-weight-bold">Edite/Delete</th>
                      </tr>
                    </thead>
                
                    <?php foreach(unika_unika("work") as $single_work) : ?>
            
                    <tbody>
                      <tr>
                        <td><?= $single_work['photo_name'] ?></td>
                        <td><?= $single_work['submitet'] ?></td>
                        <td><?= $single_work['work_photo'] ?></td>
                        <td>
                          <a href="work_delete.php?id=<?= $single_work['id'] ?>" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Delete</a>
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