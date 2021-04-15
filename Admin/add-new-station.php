

<?php include "inc/header.php"; ?>


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
              <li class="breadcrumb-item active">Add New Station</li>
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
                      <h3 class="text-center">Add New Station</h3>

                      <form action="" method="POST">
                        <div class="form-group">
                          <label>Origin</label>
                          <input type="text" name="origin" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                          <label>Destination</label>
                          <input type="text" name="destination" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                          <label>Category</label>
                          <input type="text" name="category" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                          <label>Availability</label>
                          <input type="text" name="availability" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                          <label>Price</label>
                          <input type="text" name="price" class="form-control" required="required">
                        </div>

                        <div class="form-group">
                          <input type="submit" name="register" class="btn btn-primary">
                        </div>
                      </form>

                      <?php

                        if ( isset( $_POST['register'] ) ){
                            $origin  = $_POST['origin'];
                            $destination    = $_POST['destination'];
                            $category   = $_POST['category'];
                             $availability  = $_POST['availability'];
                              $price   = $_POST['price'];

                            // Create a Data into our room Table
                            $query = "INSERT INTO station (origin, destination, category, availability, price) VALUES ( '$origin', '$destination', '$category', '$availability', '$price')";

                            $addStation = mysqli_query($conn, $query);

                            if ( $addStation){
                              header("Location: show-ticket.php");
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


