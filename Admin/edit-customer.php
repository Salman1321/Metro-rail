<?php include "inc/header.php"; ?>

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "inc/menu.php"; ?>




  <?php include "inc/top.php"; ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage All Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    

    <!-- Main content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">All Customer Data</h3>

            <!-- Table Start -->
            <table id="allCustomer" class="table table-bordered table-hover table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#Sl.</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Phone No.</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Password</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php
                  // To Read All The Data From our Database customer Table (SQL Code) 
                  $sql = "SELECT * FROM customer ORDER BY cust_name ASC";
                  $allCust = mysqli_query($conn, $sql);
                  $i = 0;
                  while( $row = mysqli_fetch_assoc($allCust) ){
                      $id         = $row['cust_id'];
                      $name       = $row['cust_name'];
                      $address    = $row['cust_address'];
                      $email      = $row['cust_mail'];
                      $phone      = $row['cust_phone'];
                      $gender     = $row['gender'];
                      $password   = $row['cust_password'];
                      $i++;
                    ?>

                      <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td>
                          <?php
                            if ( $gender == 1 ){ ?>
                              <span class="badge badge-success">Male</span>
                            <?php }
                            else if ( $gender == 2 ){ ?>
                              <span class="badge badge-success">Female</span>
                            <?php }
                            else{ ?>
                              <span class="badge badge-warning">No Data</span>
                            <?php }
                          ?>
                        </td>
                        <td><?php echo $password; ?></td>
                        <td>

                          <div class="action-bar">
                            <ul>
                              <li><a href="editCustomer.php?update=<?php echo $id; ?>"><i class="fa fa-edit"></i></a></li>
                            </ul>
                          </div>
                          
                        </td>
                      </tr>

                <?php  } 
                ?>
                
              </tbody>
            </table>
            <!-- Table End -->

            
          </div>
        </div>
      </div>
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <?php include "inc/sidebar.php"; ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "inc/script.php"; ?>





<?php include "inc/footer.php"; ?>




<!-- <div class="card">
  <div class="card-header">
    <h3 class="card-title">Manage All Users</h3>
  </div>
  <div class="card-body" style="display: block;">
    

  </div>
</div> -->