
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
              <li class="breadcrumb-item active">Show All Reservation</li>
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
            <h3 class="text-center">Show All Reservation For Delete Reservation</h3>

            <!-- Table Start -->
            <table id="allCustomer" class="table table-bordered table-hover table-striped">
              <thead class="thead-dark">
                 <tr>
                  <th scope="col">Serial No</th>
                  <th scope="col">Booking ID</th>
                  <th scope="col">Category</th>
                  <th scope="col">Origin</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Number</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Date</th>
                   <th scope="col">Action</th>
                 
                </tr>
              </thead>

              <tbody>

                 <?php
                  // To Read All The Data From our Reservation Table (SQL Code) 
                  $sql = "SELECT * FROM reservation";
                  $allReservation = mysqli_query($conn, $sql);
                  $i = 0;
                  while( $row = mysqli_fetch_assoc($allReservation) ){
                      $booking_id      = $row['id'];
                      $category     = $row['category'];
                      $origin     = $row['origin'];
                      $destination  = $row['destination'];      
                      $number       = $row['number'];
                      $mobile       = $row['mobile'];
                      $date   = $row['date'];      
                     
                      $i++;
                    ?>

                      <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $booking_id; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $origin; ?></td>
                        <td><?php echo $destination; ?></td>
                        <td><?php echo $number; ?></td>
                        <td><?php echo $mobile; ?></td>
                        <td><?php echo $date; ?></td>
                        <td>
                          <div class="action-bar">
                            <ul>
                              <li><a href="" data-toggle="modal" data-target="#deleteModal<?php echo $booking_id; ?>"><i class="fa fa-trash"></i></a></li>
                            </ul>
                          </div>
                        </td>

                      </tr>


                      <!-- Modal -->
                      <div class="modal fade" id="deleteModal<?php echo $booking_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you Confirm to delete this Reservation?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <form action="" method="POST">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                <input type="hidden" name="id" value="<?php echo $booking_id; ?>">
                                <button type="submit" name="deleteReservation" class="btn btn-danger">Confirm</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>

                  <?php  } 
                  ?>
                
              </tbody>
            </table>
            <!-- Table End -->

            
          </div>
        </div>
      </div>
    </section>


    <?php
      if (isset($_POST['deleteReservation'])){
        $deleteID = $_POST['id'];

        // DELETE SQL
        $sql = "DELETE FROM reservation WHERE id = '$deleteID'";
        $deleteTheReservation = mysqli_query($conn, $sql);

        if ( $deleteTheReservation ){
          header("Location: delete-reservation.php");
        }
        else{
          die("MySQLi Connection Failed." . mysqli_error($conn));
        }
      }
    ?>


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