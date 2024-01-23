<!DOCTYPE html>
<html>
<?php include_once 'partials/head.php'; ?>
<body>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<form action="controller/authcontroller.php" method="POST">
							<div class="form-group mb-3">
								<label for="mail">Email address</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
							</div>
							<div class="form-group mb-3">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<button type="submit" name="login" class="btn btn-primary">Submit</button>

							<p class="mt-5">Don't have any account?<a href="register.php">Create an account</a></p>
						</form> 
					</div>
				</div>

			</div>
		</div>
	</div>



	<?php include_once 'partials/footer.php'; ?>

</body>
</html>