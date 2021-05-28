
<!DOCTYPE html>
<?php
  include "lib/connection.php";
  include "inc/header.php";
  session_start();
?>






</body>


 <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">All Station Data</h3>

            <!-- Table Start -->
            <table id="allCustomer" class="table table-bordered table-hover table-striped">
              <thead class="thead-dark">
                <tr>
                	<th scope="col">Serial No</th>
                  <th scope="col">Origin</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Category</th>
                  <th scope="col">Availability</th>
                  <th scope="col">Price</th>
                  
                </tr>
              </thead>

              <tbody>

                <?php
                  // To Read All The Data From our Reservation Table (SQL Code) 
                  $sql = "SELECT * FROM station";
                  $allReservation = mysqli_query($conn, $sql);
                  $i = 0;
                  while( $row = mysqli_fetch_assoc($allReservation) ){
                      $origin      = $row['origin'];
                      $destination       = $row['destination'];
                      $category     = $row['category'];
                      $availability     = $row['availability'];
                      $price             = $row['price'];      
                     
                      $i++;
                    ?>

                      <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $origin; ?></td>
                        <td><?php echo $destination; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $availability; ?></td>
                        <td><?php echo $price; ?></td>
                        
                      </tr>

                  <?php  } 
                  ?>
                
              </tbody>
            </table>
            <!-- Table End -->

            
          </div>
        </div>
      </div>
    </section>

    <a href="home.php" style="margin-left: 45%;" class="btn btn-danger ">Back</a>


<?php
  include "inc/footer.php";
?>

