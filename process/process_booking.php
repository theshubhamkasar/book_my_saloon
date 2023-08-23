<head>
	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<?php

include('../connection.php');

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$saloon_name = $_POST['saloon_name'];
$saloon_location = $_POST['saloon_location'];
$saloon_contact = $_POST['saloon_contact'];
$saloon_date = $_POST['saloon_date'];
$time_slot = $_POST['time_slot'];
$shopkeeper_name = $_POST['shopkeeper_name'];
$shopkeeper_email = $_POST['shopkeeper_email'];



$query = "INSERT INTO booking(user_name,user_email,saloon_name,saloon_location,saloon_contact,saloon_date,time_slot,shopkeeper_name,shopkeeper_email) VALUES ('$user_name','$user_email','$saloon_name','$saloon_location','$saloon_contact','$saloon_date','$time_slot','$shopkeeper_name','$shopkeeper_email')";
$sql = mysqli_query($conn, $query);


if ($sql) {

	echo '<center><div class="bg-success text-white">';
	echo "<h3>Order Booked Successfully...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../dashboard/user_dashboard.php");
} else {

	echo '<center><div class="bg-dark text-white">';
	echo "<h3>Order Not Booked...</h3>";
	echo '</div></center>';
	header("Refresh:1; ../booking.php");
}

?>