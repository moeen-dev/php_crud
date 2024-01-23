<?php

include_once 'controller/db.php'; 
include_once 'partials/auth.php'; 

?>
 
<!DOCTYPE html>
<html>
<?php include_once 'partials/head.php'; ?>
<body>
	<?php include_once 'partials/nav.php'; ?>
	

	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-absolute start-50 translate-middle-x">
				<form method="POST" action="controller/studentcontroler.php">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" class="form-control">
						<?php
						if(isset($_GET['name_error'])){
							?>
							<small style="color: red" id="name_error"><?php echo $_GET['name_error']; ?></small>
							<?php
						}
						?>
					</div>
					<div class="form-group">
						<label>Class</label>
						<select class="form-control" id="class" name="class">
							<option value="" selected disabled>-- Select Department --</option>
							<option class="Computer Science & Tech">Computer Science & Tech</option>
							<option class="Mobile Science & Tech">Mobile Science & Tech</option>
							<option class="Wood Science & Tech">Wood Science & Tech</option>
							<option class="Automobile Science & Tech">Automobile Science & Tech</option>
						</select>
					</div>
					<div class="form-group">
						<label>Roll</label>
						<input type="number" name="roll" id="roll" class="form-control">
						<?php
						if(isset($_GET['roll_error'])){
							?>
							<small style="color: red" id="roll_error"><?php echo $_GET['roll_error']; ?></small>
							<?php
						}
						?>
					</div>
					<br>
					<button name="save" class="btn btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>

	<?php include_once 'partials/footer.php'; ?>

	<script>
		$('#name').keyup(function(event) {
			$('name_error').html('');
		});

		$('#roll').keyup(function(event) {
			$('roll_error').html('');
		});
	</script>

</body>
</html>