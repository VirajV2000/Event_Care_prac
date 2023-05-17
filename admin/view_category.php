<?php
  include '../config.php';
  $admin=new Admin();
  if(!isset($_SESSION['a_id'])){
  header('Location:/event_care_prac/admin/index.php');
}
  $aid=$_SESSION['a_id'];
  $stmt=$admin->ret("SELECT * FROM `admin`");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Event Care | Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head> 
  <body>
    <div class="container-scroller">
     
        <?php include 'partials/_sidebar.php';?>
      
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <?php include 'partials/_header.php';?>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
          <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Sl.No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           $i=1;
                           $s=$admin->ret("SELECT * FROM `category`");
                           while($r=$s->fetch(PDO::FETCH_ASSOC)){
                          ?>
                          <tr>

                            <td class="py-1">
                              <?php echo $i++;?>
                            </td>
                            <td><?php echo $r['ct_name']; ?></td>
                            <td>
                            <?php if ( $r['ct_status']=='active') { ?>
                                <label class="badge badge-success"><?php echo $r['ct_status']; ?></label>
                              <?php } else { ?>
                                <label class="badge badge-danger"><?php echo $r['ct_status']; ?></label>
                              <?php } ?>
                            </td>
                            <td>
                            <a title="update category" style="font-size: 30px;" href="updatecat.php?ct_id=<?php echo $r['ct_id']; ?>">
                                <i class="mdi mdi-tooltip-edit text-primary" ></i>
                              </a>
                              <a onclick="return confirm('Are you sure, you want to delete the category ?')" title="delete category" style="font-size: 30px;" href="controller/deletecat.php?ct_id=<?php echo $r['ct_id']; ?>">
                                <i class="mdi mdi-delete-sweep"></i>
                              </a>
                            </td>
                          </tr>
                          <?php }?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
          </div>
          <?php include 'partials/_footer.php';?>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>