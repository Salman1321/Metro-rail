<!DOCTYPE html>
<html>
<?php
    include "lib/connection.php";
     ?>


<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="adlog">
    <form action="admin.php" method="post">


            
                <div class="wrapper fadeInDown pad">
                    <div id="formContent">


                        <div class="fadeIn first">
                            <h5>Admin Access</h5>
                        </div>

                        <input type="text" id="login" class="fadeIn second" name="admin_name" placeholder="Name">
                        <input type="password" id="password" class="fadeIn third" name="admin_password" placeholder="Password">
                        <input type="submit" class="fadeIn fourth" name="submit" value="Log In">


                    </div>
                </div>
           


    </form>




   <?php
        if(isset($_POST['submit']))
        {
            if($_POST['admin_name']=="mahadi"&&$_POST['admin_password']=="1234" || $_POST['admin_name']=="minhaz vai"&&$_POST['admin_password']=="1234")
                
            {
               header("Location: admin_control.php");
            }
        }

         ?>     


</body>

</html>
