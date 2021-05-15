  

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
              <li class="breadcrumb-item active">Manage Station</li>
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
            <h3 class="text-center">All Ticket Data</h3>

            <!-- Table Start -->
            <table id="allCustomer" class="table table-bordered table-hover table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#Sl.</th>
                  <th scope="col">Origin</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Category</th>
                    <th scope="col">Availability</th>
                      <th scope="col">Price</th>

                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php
                  // To Read All The Data From our Database customer Table (SQL Code) 
                  $sql = "SELECT * FROM station";
                  $allRoom = mysqli_query($conn, $sql);
                  $i = 0;
                  while( $row = mysqli_fetch_assoc($allRoom) ){
                      $id        = $row['id'];
                      $origin  = $row['origin'];
                      $destination   = $row['destination'];
                      $category  = $row['category'];
                      $availability  = $row['availability'];
                      $price  = $row['price'];
                      $i++;
                    ?>

                      <tr>

                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $origin; ?></td>
                        <td><?php echo $destination; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $availability; ?></td>
                        <td><?php echo $price; ?></td>
                        

                        <td>
                          <div class="action-bar">
                            <ul>
                              <li><a href="edit-room.php?update=<?php echo $id; ?>"><i class="fa fa-edit"></i></a></li>
                              <li><a href="" data-toggle="modal" data-target="#deleteModal<?php echo $id; ?>"><i class="fa fa-trash"></i></a></li>
                            </ul>
                          </div>
                        </td>

                      </tr>



                      <!-- Modal -->
                      <div class="modal fade" id="deleteModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you Confirm to delete this Station?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <form action="" method="POST">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" name="deleteRoom" class="btn btn-danger">Confirm</button>
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


<!-- delete data from table -->

    <?php
      if (isset($_POST['deleteRoom'])){
        $deleteID = $_POST['id'];

        // DELETE SQL
        $sql = "DELETE FROM station WHERE id = '$id'";
        $deleteTheRoom = mysqli_query($conn, $sql);

        if ( $deleteTheRoom ){
          header("Location: show-ticket.php");
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