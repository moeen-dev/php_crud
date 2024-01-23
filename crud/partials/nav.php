<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="#">Student Doc</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link <?php if($page == 'index'){echo "active";}; ?>" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php if($page == 'add-student'){echo "active";}; ?>" href="add-student.php">Add Student</a>
				</li>
			</ul>
			<div class="d-flex gap-3">
				<a href="controller/logout.php" class="btn btn-success">Logout</a>
				<a href="" class="btn btn-primary">Profile</a>
			</div>
		</div>
	</div>
</nav>


<div class="container mt-5"></div>

