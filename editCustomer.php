<?php
  include "lib/connection.php";
  include "inc/header.php";
?>


<?php
    if ( isset($_GET['update']) ){
      $theUpdateId = $_GET['update'];
      // For Specific Data 
      $sql = "SELECT * FROM customer WHERE cust_id = '$theUpdateId' ";
      $allCustomer = mysqli_query($conn, $sql);
      while( $row = mysqli_fetch_assoc($allCustomer) ){
        $id         = $row['cust_id'];
        $name       = $row['cust_name'];
        $address    = $row['cust_address'];
        $email      = $row['cust_mail'];
        $phone      = $row['cust_phone'];
        $gender     = $row['gender'];
        $password   = $row['cust_password'];
        ?>

          <section>
            <div class="container">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <h3 class="text-center">Update Customer Information</h3>

                  <form action="" method="POST">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" name="name" class="form-control" required="required" value="<?php echo $name; ?>">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="address" class="form-control" required="required" value="<?php echo $address; ?>">
                    </div>

                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" name="mail" class="form-control" required="required" value="<?php echo $email; ?>">
                    </div>

                    <div class="form-group">
                      <label>Phone No.</label>
                      <input type="text" name="phone" class="form-control" required="required" value="<?php echo $phone; ?>">
                    </div>

                    <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name="gender">
                        <option>Please Select the Gender</option>
                        <option value="1" <?php if ( $gender == 1 ){ echo 'selected'; } ?>>Male</option>
                        <option value="2" <?php if ( $gender == 2 ){ echo 'selected'; } ?>>Female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password" class="form-control" required="required" value="<?php echo $password; ?>">
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
        $name       = $_POST['name'];
        $address    = $_POST['address'];
        $email      = $_POST['mail'];
        $phone      = $_POST['phone'];
        $gender     = $_POST['gender'];
        $password   = $_POST['password'];

      // SQL FOR UPDATE
      $sql = "UPDATE customer SET cust_name='$name', cust_address='$address', cust_mail='$email', 
      cust_phone='$phone', gender='$gender', cust_password='$password' WHERE cust_id = '$theUpdateId' ";

      $updateUserInfo = mysqli_query($conn, $sql);

      if ( $updateUserInfo ){
        header("Location: showCustomer.php");
      }
      else{
        die("Operation Faild. " . mysqli_error($conn));
      }

    }

   ?>


<?php
  include "inc/footer.php";
?>