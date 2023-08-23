<?php
include('../connection.php');
session_start();
?>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php

$shopkeeper_email = $_POST['shopkeeper_email'];
$shopkeeper_password = $_POST['shopkeeper_password'];


$query = "SELECT * FROM shopkeeper WHERE email = '$shopkeeper_email' AND password = '$shopkeeper_password'";

$sql = mysqli_query($conn, $query);	// fire the query

$count = mysqli_num_rows($sql); // to count the rows present in table

if ($count > 0) {

	$_SESSION['shopkeeper'] = $shopkeeper_email;	//session variables are set

	echo '<center><div class="bg-success text-white">';
	echo "<h3>Login Successfull...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../dashboard/shopkeeper_dashboard.php");
} else {

	echo '<center><div class="bg-dark text-white">';
	echo "<h3>Invalid Credentials...</h3>";
	echo '</div></center>';
	header("Refresh:2; ../index.php");
}



?>