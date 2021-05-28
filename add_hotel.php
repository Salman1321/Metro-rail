

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
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body class="addhotel">
   
   
    <form action="add_hotel.php" method=post>


        <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first">
                    <h5>Add Hotel</h5>
                </div>

                
                <input type="text" id="place" class="fadeIn second" name="place" placeholder="Place name" required>
                
              <!--  <input type="file" id="image" class="fadeIn second" name="image" placeholder="Place Image"> -->
                
                <input type="text" id="hotel" class="fadeIn second" name="hotel" placeholder="Hotel Name" required>
                
                <input type="text" id="room_cost" class="fadeIn second" name="room_cost" placeholder="Room Cost" required>
                
                <input type="text" id="tot_room" class="fadeIn second" name="tot_room" placeholder="Total Room" required>
                
                <input type="text" id="avl_room" class="fadeIn second" name="avl_room" placeholder="Avaliable Room" required>
                
                
                <input type="submit" class="fadeIn fourth" name="submit" value="Add Hotel">


            </div>
        </div>





    </form>
    <?php    
        if(isset($_POST['submit']))
        {
            $place_name = $_POST['place_name'];
            $hotel_name = $_POST['hotel_name'];
            $room_cost = $_POST['room_cost'];
            $tot_room = $_POST['tot_room'];
            $avl_room = $_POST['avl_room'];
            
            
            $sql_1 = "SELECT * FROM hotel WHERE  hotel_name='$hotel_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO hotel(place_name,hotel_name,room_cost,tot_room,avl_room) VALUES('$place_name','$hotel_name','$room_cost','$tot_room','$avl_room')"; 
                if($conn->query($sql)== TRUE)
                {
                    echo "new add hotel record create successfully<br>";
                }
            }
            else
            {
                echo "this hotel exist<br>";    
            }
            
        }
        ?>
    
    
        ?>
</body>

</html>
