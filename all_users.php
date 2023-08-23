<?php

include('./connection.php');



session_start();

if (!isset($_SESSION['admin'])) {
  header("Refresh:0; ./index.php");
  die();
}


$email_admin = $_SESSION['admin'];

$query1 = "SELECT * FROM booking";

$sql1 = mysqli_query($conn, $query1);

$rows = mysqli_num_rows($sql1);


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
              <a class="nav-link h5 px-3" href="./dashboard/admin_dashboard.php">
                <span>All Shopkeepers</span>
              </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link h5 px-3" href="./all_users.php">
                All Users
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link h5 px-3" href="./booked_saloons_admin.php">
                Saloons Booked
              </a>
            </li>



          </ul>






        </div>
      </nav>







      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Admin Dashboard</h1>
        </div>




        <div class="container">


          <?php

          if ($rows == 0) {
            echo "<br><br><center><h2>Not booked yet...</center></h2>";
          } elseif ($rows > 0) { ?>



            <div class="container">
              <div class="col-lg-12">
                <br>
                <h3 class="text-center">All Users</h3>

                <table class="table table-striped table-hover table-bordered ">

                  <tr class="bg-light text-light text-center">
                    <th class="h5">Name</th>
                    <th class="h5">Email</th>
                  </tr>




                  <?php

                  while ($row1 = mysqli_fetch_row($sql1)) { ?>



                    <tr class="text-center">
                      <td><?php echo $row1['1']; ?></td>
                      <td><?php echo $row1['2']; ?></td>


                    </tr>

                <?php }
                } ?>


                </table>
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