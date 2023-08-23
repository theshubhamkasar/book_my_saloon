<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<?php

include('../connection.php');

session_start();

$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];


$query = "SELECT * FROM admin WHERE login_email = '$admin_email' AND login_password = '$admin_password'";

$sql = mysqli_query($conn, $query);	// fire the query

$count = mysqli_num_rows($sql); // to count the rows present in table

if ($count > 0) {

	$_SESSION['admin'] = $admin_email;	//session variables are set

	echo '<center><div class="bg-success text-white">';
	echo "<h3>Login Successfull...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../dashboard/admin_dashboard.php");
} else {

	echo '<center><div class="bg-dark text-white">';
	echo "<h3>Invalid Credentials...</h3>";
	echo '</div></center>';
	header("Refresh:2; ../index.php");
}



?>