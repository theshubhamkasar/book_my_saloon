<?php
include('./navbar.php');
?>

<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>



	<div class="row">
		<div class="col-lg-3">

		</div>


		<div class="col-lg-6">
			<!-- sign up form start -->

			<div class="card shadow container mt-5 mb-5">

				<center>
					<h2 class="mt-4 mb-4">SHOPKEEPER SIGNUP</h2>
				</center>

				<!-- Form starts here -->

				<form action="process/process_shopkeepersignup.php" method="POST" autocomplete="off">

					<div class="form-group mb-3">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter your name" required="true">
					</div>

					<div class="form-group mb-3">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control" placeholder="Enter your email" required="true">
					</div>

					<div class="form-group mb-3">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required="true">
					</div>

					<center>
						<div class="form-group mb-3">
							<button type="submit" class="btn btn-secondary">Sign UP</button>
						</div>
					</center>

				</form>


				<!-- form ends here -->
			</div>

			<!-- sign up form end -->

		</div>


		<div class="col-lg-3">

		</div>

	</div>




</body>

</html>