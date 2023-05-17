<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.png" style="height:300px;width:200px;margin-left:-50px" alt="logo" height="266px"/></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo.png" style="height:300px;width:200px" alt="logo" /></a>
        </div>
<ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Henry Klein</span>
                <span class="font-weight-normal"><?php echo $row['a_email'];?></span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="add_category.php">add category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view_category.php">view category</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Manage users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="view_event-manager.php">Event Managers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view_customers.php">Customers</a>
                </li>
              </ul>
            </div>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="view_payments.php">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Payments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_feedback.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Feedbacks</span>
            </a>
          </li>
          
        </ul>
</nav>