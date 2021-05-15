
<?php include "inc/header.php"; ?>
  <?php session_start(); ?>
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">Ticket Reservation Form</h3>
            <form action="cost.php" method="post">
            <div class="form-group">
                        <label>Select Ticket Category *</label>
                          <select name="category"  class="form-control" required>
                            <option  ></option>
                            <option >Tourist</option>
                            <option >Student</option>
                            <option >Business</option>
                          </select>
                      </div>


                      <div class="form-group">
                        <label>Origin *</label>
                          <select name="origin" class="form-control" required>
                            <option value selected ></option>
                            <option >Uttara</option>
                            <option >Mirpur</option>
                            <option >Pallabi</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label>Destination *</label>
                          <select name="destination" class="form-control" required>
                            <option value selected ></option>
                            <option >Uttara</option>
                            <option >Mirpur</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label>No. of Tickets *</label>
                          <select name="number" class="form-control" required>
                            <option value selected ></option>
                            <option >1</option>
                            <option >2</option>
                             <option >3</option>
                              <option >4</option>
                          </select>
                      </div>

                      <div class="form-group">
                                <label>Mobile Number</label>
                                <input name="mobile" type ="text" class="form-control" required="required" autocomplete="off">
                            </div>
                    


                      
                
                
                
                    
                      <div class="form-group">
                                <label>Reservation Date</label>
                                <input name="reservation" type ="date" class="form-control">
                            </div>
     
            <input type="submit" name="submit" class="btn btn-primary">
          </form>

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



<?php /*

else
              {
              
                  $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                  $rs = mysqli_query($con,$check);
                  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                  if($data[0] > 1) {
                    echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                    
                  }

                  else
                  {
                    $new ="Not Conform";
                    $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                    if (mysqli_query($con,$newUser))
                    {
                      echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                      
                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
              }
              }*/ ?>