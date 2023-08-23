<?php
include("./connection.php");

session_start();

if (!isset($_SESSION['shopkeeper'])) {
  header("Refresh:0; ../index.php");
  die();
}


$email_shopkeeper = $_SESSION['shopkeeper'];



$query = "SELECT * FROM shopkeeper WHERE email='$email_shopkeeper'";

$sql = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($sql)
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
              <a class="nav-link h5 px-3" href="./dashboard/shopkeeper_dashboard.php">
                <span>Profile</span>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link h5 px-3" href="./add_saloon.php">
                Add Saloon
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link h5 px-3" href="./users_booked.php">
                Users Booked
              </a>
            </li>



          </ul>






        </div>
      </nav>







      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Saloon Information</h1>
        </div>



        <!-- Form starts here... -->

        <div class="row">

          <div class="col-lg-2">
          </div>

          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="container">

              <form action="./process_add_saloon.php" method="POST" autocomplete="off" enctype="multipart/form-data">

                <div class="form-group mb-4">
                  <h6><label>Name Of Saloon</label></h6>
                  <input type="text" name="name" class="form-control" required="true" placeholder="enter saloon name">
                </div>

                <div class="form-group mb-4">
                  <h6><label>Location</label></h6>
                  <input type="text" name="location" class="form-control" required="true" placeholder="enter your saloon location">
                </div>

                <div class="form-group mb-4">
                  <h6><label>Contact</label></h6>
                  <input type="text" name="contact" class="form-control" required="true" placeholder="enter contact number">
                </div>

                <div class="form-group mb-4">
                  <h6><label>Picture</label></h6>
                  <input type="file" name="file" class="form-control" required="true">
                </div>

                <div class="form-group">
                  <input type="hidden" name="shopkeeper_name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>

                <div class="form-group">
                  <input type="hidden" name="shopkeeper_email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>


                <center>
                  <div class="form-group mb-4">
                    <button type="submit" name="submit" class="btn btn-outline-dark btn-lg">ADD</button>
                  </div>
                </center>

              </form>
            </div>

          </div>

          <div class="col-lg-2">
          </div>

        </div>


        <!-- Form ends here... -->





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