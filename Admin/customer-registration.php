
<?php include "inc/header.php"; ?>

  <!-- Main Sidebar Container -->
  <?php include "inc/menu.php"; ?>





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
              <li class="breadcrumb-item active">Add New User</li>
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
          <div class="col-md-6 offset-md-3">
            <h3 class="text-center">Add New User</h3>

            <form action="" method="POST">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="cust_name" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Address</label>
                <input type="text" name="cust_address" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="cust_mail" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Phone No.</label>
                <input type="text" name="cust_phone" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender">
                  <option>Please Select the Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="cust_password" class="form-control" required="required">
              </div>

              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cust_c_password" class="form-control" required="required">
              </div>

              <div class="form-group">
                <input type="submit" name="register" class="btn btn-primary">
              </div>
            </form>

            <?php

              if ( isset( $_POST['register'] ) ){
                  $customer_name      = $_POST['cust_name'];
                  $customer_address   = $_POST['cust_address'];
                  $customer_phone     = $_POST['cust_phone'];
                  $customer_mail      = $_POST['cust_mail'];
                  $customer_gender    = $_POST['gender'];
                  $customer_password  = $_POST['cust_password'];

                  // Create a Data into our users Table
                  $query = "INSERT INTO customer(cust_name,cust_address,cust_mail,cust_phone,gender,cust_password) VALUES ('$customer_name','$customer_address','$customer_mail','$customer_phone','$customer_gender','$customer_password')";

                  $addStudent = mysqli_query($conn, $query);

                  if ( $addStudent ){
                    header("Location: users.php");
                  }
                  else{
                    die("MySQLi Connection Failed." . mysqli_error($conn));
                  }

              }

            ?>

            
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