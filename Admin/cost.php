

<?php include "inc/header.php"; ?>
<?php session_start() ?>
  <!-- Navbar -->
<?php include "inc/top.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include "inc/menu.php"; ?>

<?php
            
              if(isset($_POST['submit']))
              {
                $category    = $_POST['category'];
                $origin          = $_POST['origin'];              
                $destination   = $_POST['destination'];
                $number      = $_POST['number'];
                $mobile = $_POST['mobile'];
                $reservation     = $_POST['reservation'];
                
               
              

                
                $query = "INSERT INTO `reservation`(`category`, `origin`, `destination`, `number`,`mobile`, `date` ) VALUES ('$category', '$origin', '$destination', '$number', '$mobile', '$reservation')";



                if(!mysqli_query($conn, $query))
                {
                  echo "<script type='text/javascript'> alert('Sorry could not reserve the rooms. Please try again.');</script>";
                  header("Location: booking.php");
                }
              }
              else{
                header("Location: home.php");
              }

?>






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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
  <!-- /.content-wrapper -->


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <?php include "inc/sidebar.php"; ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "inc/script.php"; ?>