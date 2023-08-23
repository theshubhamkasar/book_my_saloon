<?php

session_start();

if (!isset($_SESSION['user'])) {
  header("Refresh:0; ../index.php");
  die();
}

include("./connection.php");

$query = "SELECT * FROM add_saloon";
$sql = mysqli_query($conn, $query);



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
              <a class="nav-link h5 px-3" href="./saloons_booked.php">
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


        <div class="container">
          <div class="row">

            <?php

            while ($row = mysqli_fetch_array($sql)) { ?>

              <div class="col-sm-4">
                <div class="card border-secondary shadow my-4 " style="width: 17rem; height: 25rem">
                  <div class="card-body">
                    <center>
                      <img style="width:230px; height:180px" class="card-img-top" src="<?php echo $row['image']; ?>">
                    </center>

                    <br>
                    <p class="card-text text-left"><b>Name : </b><br><?php echo $row['name_of_saloon']; ?></p>
                    <p class="card-text text-left"><b>Location : </b><br><?php echo $row['location']; ?></p>

                    <center>
                      <a href="./booking.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Book</a>
                    </center>
                  </div>
                </div>
              </div>
            <?php
            } ?>

          </div>
        </div>


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