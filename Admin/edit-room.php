<?php include "inc/header.php"; ?>

  <!-- Navbar -->
 

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
            <h3 class="text-center">Update Customer Information</h3>


<?php
    if ( isset($_GET['update']) ){
      $theUpdateId = $_GET['update'];
      // For Specific Data 
      $sql = "SELECT * FROM room WHERE id = '$theUpdateId' ";
      $allRoom = mysqli_query($conn, $sql);
      while( $row = mysqli_fetch_assoc($allRoom) ){
        $id        = $row['id'];
        $RoomType  = $row['type'];
        $BedType   = $row['bed'];
        $RoomCost  = $row['cost'];
        ?>

          <section>
            <div class="container">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <h3 class="text-center"></h3>

                  <form action="" method="POST">
                    <div class="form-group">
                      <label>Room Type</label>
                      <input type="text" name="roomType" class="form-control" required="required" value="<?php echo $RoomType; ?>">
                    </div>

                    <div class="form-group">
                      <label>Bed</label>
                      <select class="form-control" name="bedType">
                        <option>Please Select the Bed Type</option>
                        <option value="1" <?php if ( $BedType == 1 ){ echo 'selected'; } ?>>Single</option>
                        <option value="2" <?php if ( $BedType == 2 ){ echo 'selected'; } ?>>Double</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Room Cost</label>
                      <input type="text" name="roomCost" class="form-control" required="required" value="<?php echo $RoomCost; ?>">
                    </div>

                    <div class="form-group">
                      <input type="submit" name="updateInfo" class="btn btn-primary" value="Save Changes">
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </section>

    <?php  }
    }
?>



    <?php

    // Update the Data Set into the DB
    if ( isset($_POST['updateInfo']) ){
        $roomType   = $_POST['roomType'];
        $bedType    = $_POST['bedType'];
        $roomCost   = $_POST['roomCost'];

      // SQL FOR UPDATE
      $sql = "UPDATE room SET room='$roomType', bed='$bedType', cost='$roomCost' ";

      $updateRoomInfo = mysqli_query($conn, $sql);

      if ( $updateRoomInfo ){
        header("Location: show-room.php");
      }
      else{
        die("Operation Faild. " . mysqli_error($conn));
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