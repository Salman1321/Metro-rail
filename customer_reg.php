<!DOCTYPE html>
<?php
include "lib/connection.php";
?>
<html>

<head>



    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="headerstyle.css" rel="stylesheet" type="text/css">



</head>

<body class="userreg">

 <?php include('header.php'); ?>
   
   
    <form action="customer_reg.php" method=post>


        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first">
                    <h5>User Sign Up</h5>
                </div>

                <input type="text" id="login" class="fadeIn second" name="cust_name" placeholder="Name" required>
                <input type="text" id="login" class="fadeIn second" name="cust_address" placeholder="Address" required>
                <input type="text" id="login" class="fadeIn second" name="cust_phone" placeholder="Phone" required>
                <input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email" required>
                <input type="password" id="password" class="fadeIn third" name="cust_password" placeholder="Password" required>
                <input type="password" id="c_password" class="fadeIn third" name="cust_c_password" placeholder="Confirm Password" required>
                
                <div class="form-group">
                <select class="form-control" name="gender">
                  <option>Please Select the Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
                <input type="submit" class="fadeIn fourth" name="submit" value="Sign In">

                <p>Already have an Account?<a href="customer_log.php"> Log In</a></p>
            </div>
        </div>





    </form>
    <?php    
        if(isset($_POST['submit']))
        {
            $customer_name      = $_POST['cust_name'];
            $customer_password  = $_POST['cust_password'];
            $customer_address   = $_POST['cust_address'];
            $customer_phone     = $_POST['cust_phone'];
            $customer_mail      = $_POST['cust_mail'];
            $customer_gender    = $_POST['gender'];
            
            $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
            $result = $conn->query($sql_1);
            
            if($result->num_rows==0)
            {
                    // Create a Data into our customer Table
                 $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone,gender) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone','$customer_gender')";
            
                if ($conn->query($sql) == TRUE) {
                  echo "New record created successfully<br>";       
                   }
                
               header("Location: home.php") ;
    
               }
             else
             {
                echo "This mail is already taken<br>";
             }
         }
    
    
        ?>
</body>

</html>
