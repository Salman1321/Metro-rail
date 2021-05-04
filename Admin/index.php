<?php
  ob_start();
  session_start();
  include("inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">






  
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Sign In">
          </div>
          <!-- /.col -->
        </div>
      </form>


      <?php

        if ( isset($_POST['login']) ){

          $email      = mysqli_real_escape_string($conn, $_POST['email']);
          $password   = mysqli_real_escape_string($conn, $_POST['password']);

          $sql = "SELECT * FROM customer WHERE cust_mail = '$email'";
          $authUser = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($authUser)){

            $_SESSION['id']         = $row['cust_id'];
            $_SESSION['name']       = $row['cust_name'];
            $_SESSION['address']    = $row['cust_address'];
            $_SESSION['email']      = $row['cust_mail'];
            $_SESSION['phone']      = $row['cust_phone'];
            $_SESSION['gender']     = $row['gender'];
            $_SESSION['password']   = $row['cust_password'];

            if ( $_SESSION['email'] == $row['cust_mail'] && $_SESSION['password'] == $row['cust_password'] && $_POST['email']=="jubair@gmail.com"&&$_POST['password']=="jubair"){
              header("Location: dashboard.php");
            }
            else if ( $_SESSION['email'] != $row['cust_mail'] && $_SESSION['password'] != $row['cust_password'] ){
              header("Location: index.php");
            }
            else{
              header("Location: index.php");
            }
          }

        }

      ?>
 

      <!-- /.social-auth-links -->

     <!-- <p class="mb-1">
        <a href="recover-password.php">I forgot my password</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<?php
  ob_end_flush();
?>


</body>
</html>
