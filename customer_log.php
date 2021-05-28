<!DOCTYPE html>
<?php
include "lib/connection.php";
session_start();

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
      <script src="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="headerstyle.css" rel="stylesheet" type="text/css">
</head>

<body class="userlog">

    <?php include('header.php'); ?>
    <form action="customer_log.php" method="post">

        <div class="wrapper fadeInDown pad">
            <div id="formContent">

                <div class="fadeIn first">
                    <h5>User Log In</h5>
                </div>

                    <input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email" required>
                    <input type="password" id="password" class="fadeIn third" name="cust_password" placeholder="Password" required>
                    <input type="submit" class="fadeIn fourth" name="add" value="Log In">

                   <p>Don't have an Account?<a href="customer_reg.php"> Sign Up</a></p>

            </div>
        </div>

    </form>
    <?php
        if(isset($_POST['add']))
        {   
            $customer_password = $_POST['cust_password'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql = "SELECT * FROM customer WHERE cust_mail = '$customer_mail' AND cust_password ='$customer_password'";
            $result = $conn->query($sql);
            if($result->num_rows!=0)
            {
                $sql_1 = "SELECT cust_id from customer WHERE cust_mail = '$customer_mail' AND cust_password = '$customer_password'";
                
                $result_1 = $conn->query($sql_1);
                
                $row = $result_1->fetch_assoc();
                $_SESSION["email"]    = $row['cust_mail'];
                $_SESSION["password"] = $row['cust_password'];
                header("Location: booking.php");
            }
            else
            {
                echo "Please register<br>";
            }
        }
        ?>
</body>

</html>
