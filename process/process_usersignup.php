<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<?php

include("../connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    echo '<center><div class="bg-success text-white">';
    echo "<h3>User Registered Successfully...</h3>";
    echo '</div></center>';
    header("Refresh:1; ../index.php");
} else {

    echo '<center><div class="bg-dark text-white">';
    echo "<h3>User Not Registered...</h3>";
    echo '</div></center>';
    header("Refresh:2; ../user_signup.php");
}





?>