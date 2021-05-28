<!DOCTYPE html>
<html lang="en">

<?php
    
include "lib/connection.php";
    
    session_start();
    
    
  //  $customer_id = $_SESSION['cust_id'];

?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="colorlib-booking-form/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="colorlib-booking-form/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<?php include('header.php'); ?>



	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
						
							<form action="check_booking_bill.php" method="post">
							
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

            								

            													
									
								
								<div class="form-btn">
								   
								   <!--<a href="check_booking_bill.php">-->
									<input type="submit" name="submit" class="btn btn-primary">
								   <!--</a>-->
									
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>


