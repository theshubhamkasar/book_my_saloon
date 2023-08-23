<?php
include('./navbar.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>bookmysaloon</title>
</head>

<body>

  <div class="container">

    <div class="row">

      <div class="col-lg-4 col-sm-4 my-5">

        <center>

          <form action="./process/process_shopkeeperlogin.php" method="post" autocomplete="off">

            <div class="form-group">
              <img src="./assets/img/profile.png" class="form-control" alt="user_profile" style="width:100px;height:100px;border-radius:50%;">
            </div>

            <div class="form-group">
              <div class="mb-3 mt-2">
                <input type="email" name="shopkeeper_email" class="form-control" id="shopkeeper_email" placeholder="shopkeeper email">
              </div>
            </div>

            <div class="form-group">
              <div class="mb-3">
                <input type="password" name="shopkeeper_password" class="form-control" id="shopkeeper_password" placeholder="shopkeeper password">
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class=" mb-3 btn btn-secondary">Log In</button>
            </div>

            <div class="form-group">
              <a href="shopkeeper_signup.php" class="hsy">haven't sign up yet?</a>
            </div>

          </form>

        </center>



      </div>


      <div class="col-lg-4 col-sm-4 my-5">

        <center>

          <form action="./process/process_userlogin.php" method="post" autocomplete="off">

            <div class="form-group">
              <img src="./assets/img/profile.png" class="form-control" alt="user_profile" style="width:100px;height:100px;border-radius:50%;">
            </div>

            <div class="form-group">
              <div class="mb-3 mt-2">
                <input type="email" name="user_email" class="form-control" id="user_email" placeholder="user email">
              </div>
            </div>

            <div class="form-group">
              <div class="mb-3">
                <input type="password" name="user_password" class="form-control" id="user_password" placeholder="user password">
              </div>
            </div>


            <div class="form-group">
              <button type="submit" class=" mb-3 btn btn-secondary">Log In</button>
            </div>

            <div class="form-group">
              <a href="user_signup.php" class="hsy">haven't sign up yet?</a>
            </div>

          </form>

        </center>


      </div>


      <div class="col-lg-4 col-sm-4 my-5">

        <center>

          <form action="./process/process_adminlogin.php" method="post" autocomplete="off">

            <div class="form-group">
              <img src="./assets/img/profile.png" class="form-control" alt="user_profile" style="width:100px;height:100px;border-radius:50%;">
            </div>

            <div class="form-group">
              <div class="mb-3 mt-2">
                <input type="email" name="admin_email" class="form-control" id="admin_email" placeholder="admin email">
              </div>
            </div>

            <div class="form-group">
              <div class="mb-3">
                <input type="password" name="admin_password" class="form-control" id="admin_password" placeholder="admin password">
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-secondary">Log In</button>
            </div>

          </form>

        </center>

      </div>

    </div>
  </div>

</body>

</html>


<style>
  .hsy {
    text-decoration: none;
  }
</style>