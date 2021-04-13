<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--
          <img src="" class="img-circle elevation-2" alt="User Image">
        -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Shams Jubair</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-header">Application Features</li>


          <!-- Manage Users Nav Start -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="customer-registration.php?do=Add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="users.php?do=Manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="edit-customer.php?do=Manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="delete-customer.php?do=Manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete User</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- Manage Users Nav End -->


          <!-- Manage Users Nav Start -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reservation
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reservation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservation Form</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all-reservation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Reservation</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="delete-reservation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Reservation</p>
                </a>
              </li>
            </ul>

          </li>
          <!-- Manage Users Nav End -->



        <!-- Manage Rooms Nav Start -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="  fa fa-subway"></i>
              <p>
                Manage Stations
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-new-station.php?do=Add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Station</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="show-ticket.php?do=Manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Stations</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Manage Rooms Nav End -->


          <!-- Logout Nav Option -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>