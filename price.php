<?php 
session_start();
require_once 'database.php';
$price = true;
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
                  <form method="POST" action="price_post.php">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating h6">Basic Title</label>
                          <input type="text" class="form-control" name="basic_title">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="text" class="form-control" name="basic_price">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Use Title</label>
                          <input type="text" class="form-control" name="basic_use">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Project Number</label>
                          <input type="text" class="form-control" name="basic_project">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Disk Number</label>
                          <input type="text" class="form-control" name="basic_disk">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Domain Type</label>
                          <input type="text" class="form-control" name="basic_domain">
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Support</label>
                          <input type="text" class="form-control" name="basic_support">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Update Reviews</button>

                    <hr>
                  <h6>Add Reviews</h6>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="font-weight-bold">Basic</th>
                        <th class="font-weight-bold">Bsic Price</th>
                        <th class="font-weight-bold">Use Title</th>
                        <th class="font-weight-bold">Project Number</th>
                        <th class="font-weight-bold">Disk Number</th>
                        <th class="font-weight-bold">Domain Type</th>
                        <th class="font-weight-bold">Support</th>

                        <th class="font-weight-bold">Edite/Delete</th>
                      </tr>
                    </thead>
                
                    <?php foreach(unika_unika("price") as $single_price) : ?>
              
                    <tbody>
                      <tr>
                        <td><?= $single_price['basic_title'] ?></td>
                        <td><?= $single_price['basic_price'] ?></td>
                        <td><?= $single_price['basic_use'] ?></td>
                        <td><?= $single_price['basic_project'] ?></td>
                        <td><?= $single_price['basic_disk'] ?></td>
                        <td><?= $single_price['basic_domain'] ?></td>
                        <td><?= $single_price['basic_support'] ?></td>
                        
                        <td>
                          <a href="price_delete.php?id=<?= $single_price['id'] ?>" class="btn btn-sm bg-danger"><i class="far fa-trash-alt"></i> Delete</a>
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
  <!-- Deleted work -->
<?php if(isset($_SESSION['delete_status'])): ?>
  <script>
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been deleted',
  showConfirmButton: false,
  timer: 1500
})
  </script>
<?php endif;
      unset($_SESSION['delete_status']); ?>
<!-- Deleted work end -->

<!-- Added work -->
<?php if(isset($_SESSION['add_status'])): ?>
<script>
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

</script>
  <?php endif; 
  unset($_SESSION['add_status']); ?>
<!-- Added work end-->

<!-- Confirmation delete work start -->
<script>
   $('.delete_btn').click(function(){
    var link = ($(this).attr('id'));
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link;
  }
})
    });
</script>
<!--Confirmation Deleted work end -->