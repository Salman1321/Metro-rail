<?php
  include "lib/connection.php";
  include "inc/header.php";
?>



    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-center">All Customer Data</h3>

            <!-- Table Start -->
            <table id="allCustomer" class="table table-bordered table-hover table-striped">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#Sl.</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Phone No.</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Password</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>

                <?php
                  // To Read All The Data From our Database customer Table (SQL Code) 
                  $sql = "SELECT * FROM customer ORDER BY cust_name ASC";
                  $allCust = mysqli_query($conn, $sql);
                  $i = 0;
                  while( $row = mysqli_fetch_assoc($allCust) ){
                      $id         = $row['cust_id'];
                      $name       = $row['cust_name'];
                      $address    = $row['cust_address'];
                      $email      = $row['cust_mail'];
                      $phone      = $row['cust_phone'];
                      $gender     = $row['gender'];
                      $password   = $row['cust_password'];
                      $i++;
                    ?>

                      <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td>
                          <?php
                            if ( $gender == 1 ){ ?>
                              <span class="badge badge-success">Male</span>
                            <?php }
                            else if ( $gender == 2 ){ ?>
                              <span class="badge badge-success">Female</span>
                            <?php }
                            else{ ?>
                              <span class="badge badge-warning">No Data</span>
                            <?php }
                          ?>
                        </td>
                        <td><?php echo $password; ?></td>
                        <td>



                          <div class="action-bar">
                            <ul>
                              <li><a href="editCustomer.php?update=<?php echo $id; ?>"><i class="fa fa-edit"></i></a></li>
                              <li><a href="" data-toggle="modal" data-target="#deleteModal<?php echo $id; ?>"><i class="fa fa-trash"></i></a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>



                      <!-- Modal -->
                      <div class="modal fade" id="deleteModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you Confirm to delete this user?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <form action="" method="POST">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                <input type="hidden" name="customerID" value="<?php echo $cust_id; ?>">
                                <button type="submit" name="deleteCustomer" class="btn btn-danger">Confirm</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>

                <?php  } 
                ?>
                
              </tbody>
            </table>
            <!-- Table End -->

            
          </div>

          <div class="col-md-12 text-center">
            <a href="customer_reg.php" class="btn btn-primary">Register New Customer</a>
          </div>
        </div>
      </div>
    </section>




    <?php
      if (isset($_POST['deleteCustomer'])){
        $deleteID = $_POST['customerID'];

        // DELETE SQL
        $sql = "DELETE FROM users WHERE id = '$deleteID'";
        $deleteTheUser = mysqli_query($conn, $sql);

        if ( $deleteTheUser ){
          header("Location: showCustomer.php");
        }
        else{
          die("MySQLi Connection Failed." . mysqli_error($conn));
        }
      }
    ?>


<?php
  include "inc/footer.php";
?>