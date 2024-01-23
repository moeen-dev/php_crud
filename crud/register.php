<!DOCTYPE html>
<html>
<?php
include_once 'partials/head.php'; 
include_once 'controller/authcontroller.php';
?>
<body>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<form action="controller/authcontroller.php" method="POST">
							<div class="form-group mb-3">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
							</div>
							<div class="form-group mb-3">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
							</div>
							<div class="form-group mb-3">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<button type="submit"
							name="register" class="btn btn-primary">Submit</button>

							<p class="mt-5">Already have an account?<a href="login.php">Login</a></p>
						</form> 
					</div>
				</div>

			</div>
		</div>
	</div>



	<?php include_once 'partials/footer.php'; ?>

</body>
</html>