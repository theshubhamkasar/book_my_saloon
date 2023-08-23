<?php
session_start();
include("./connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  $sql = "SELECT * FROM add_saloon WHERE id = $id ";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($query);


  ?>

  <?php

  $logged_user = $_SESSION['user'];

  $query1 = "SELECT * FROM user WHERE email='$logged_user' ";

  $sql1 = mysqli_query($conn, $query1);


  $row1 = mysqli_fetch_row($sql1);


  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>bookmysaloon</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">



  </head>


  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="./index.php">bookmysaloon</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="./logout.php">Sign out</a>
        </div>
      </div>
    </header>




    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky">
            <ul class="nav navbar-nav flex-column">
              <li class="nav-item">
                <a class="nav-link h5 px-3" href="./dashboard/user_dashboard.php">
                  Profile
                </a>
              </li>

              <li class="nav-item active">
                <a class="nav-link h5 px-3" href="./book_saloon.php">
                  Book Saloon
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link h5 px-3" href="#">
                  Booked Saloons
                </a>
              </li>



            </ul>







          </div>
        </nav>







        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Book Saloon</h1>
          </div>



          <!-- booking form start here -->
          <div class="container">
            <div class="row">
              <div class="col-lg-2">
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="">

                  <form action="./process/process_booking.php" method="POST" autocomplete="off">

                    <div class="form-group">
                      <input type="hidden" name="user_name" class="form-control" value="<?php echo $row1[1]; ?>">
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="user_email" class="form-control" value="<?php echo $row1[2]; ?>">
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="shopkeeper_name" class="form-control" value="<?php echo $row['shopkeeper_name']; ?>">
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="shopkeeper_email" class="form-control" value="<?php echo $row['shopkeeper_email']; ?>">
                    </div>

                    <div class="form-group mb-4">
                      <h6><label>Name Of Saloon</label></h6>
                      <input type="text" name="saloon_name" placeholder="enter saloon name" class="form-control" value="<?php echo $row['name_of_saloon']; ?>" required="true">
                    </div>

                    <div class="form-group mb-4">
                      <h6><label>Saloon Location</label></h6>
                      <input type="text" name="saloon_location" placeholder="enter saloon location" class="form-control" value="<?php echo $row['location']; ?>" required="true">
                    </div>

                    <div class="form-group mb-4">
                      <h6><label>Saloon Contact Number</label></h6>
                      <input type="text" name="saloon_contact" placeholder="enter saloon contact number" class="form-control" value="<?php echo $row['contact']; ?>" required="true">
                    </div>

                    <div class="form-group mb-4">
                      <h6><label>Select the Date</label></h6>
                      <input type="date" name="saloon_date" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                      <h6><label>Select the Time slot</label></h6>

                      <select name="time_slot" class="form-control" required="true">
                        <option value="9AM - 12PM">9AM - 12PM</option>
                        <option value="12PM - 3PM">12PM - 3PM</option>
                        <option value="3PM - 6PM">3PM - 6PM</option>
                        <option value="6PM - 9PM">6PM - 9PM</option>
                      </select>
                    </div>



                    <center>
                      <div class="form-group mb-4">
                        <button class="btn btn-outline-success">BOOK</button>
                      </div>
                    </center>
                  </form>

                </div>
              </div>


              <div class="col-lg-2">
              </div>

            </div>
          </div>

          <!-- booking form end here -->


          <!-- bootstrap js CDN -->
          <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->

          <!-- jQuery CDN -->
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->


          <script src="./assets/js/bootstrap.bundle.min.js"></script>

          <script src="./assets/js/jquery.min.js"></script>

          <script src="./assets/js/dashboard.js"></script>

          <script src="./assets/js/custom.js"></script>
  </body>

  </html>