<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


	<?php

	include('./connection.php');

	if (isset($_POST['submit'])) {


		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$location = $_POST['location'];
		$shopkeeper_name = $_POST['shopkeeper_name'];
		$shopkeeper_email = $_POST['shopkeeper_email'];
		$file = $_FILES['file'];


		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];


		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 10000000) {    // 10 mb

					$fileDestination = 'upload/' . $fileName;

					move_uploaded_file($fileTmpName, $fileDestination);
				} else {
					echo "Your file is too big!";
				}
			} else {
				echo "There was an error uploading your file!";
			}
		} else {
			echo "You cannot upload files of this type!";
		}


		$query = "INSERT INTO add_saloon(name_of_saloon,contact,location,image,shopkeeper_name,shopkeeper_email) VALUES ('$name','$contact','$location','$fileDestination','$shopkeeper_name','$shopkeeper_email')";
		$sql = mysqli_query($conn, $query);


		if ($sql) {

			echo '<center><div class="bg-success text-white">';
			echo "<h3>Saloon Added Successfully...</h3>";
			echo '</div></center>';
			header("Refresh:1; ./dashboard/shopkeeper_dashboard.php");
		} else {

			echo '<center><div class="bg-dark text-white">';
			echo "<h3>Saloon Not Added...</h3>";
			echo '</div></center>';
			header("Refresh:1; ./add_saloon.php");
		}
	}
	?>


</body>

</html>