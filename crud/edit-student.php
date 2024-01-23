<?php  include_once 'controller/db.php'?>
</body>
</html>
<!DOCTYPE html>
<html>
<?php include_once 'partials/head.php'; ?>
<body>
	<?php include_once 'partials/nav.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 position-absolute start-50 translate-middle-x">

				<?php

				if (isset($_GET['id'])) {

					$id = $_GET['id'];

					$sql = "SELECT * FROM student WHERE id = $id";

					$query = $conn->query($sql);

					if ($query->num_rows > 0) {
						while ($student = $query->fetch_assoc()) {

							?>
							<form method="POST" action="controller/studentcontroler.php">
								<input type="hidden" name="id" value="<?php echo $student['id']; ?>">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" id="name" class="form-control" value="<?php echo $student['name'];?>">
									<?php
									if(isset($_GET['name_error'])){
										?>
										<small style="color: red" id="name_error"><?php echo $_GET['name_error']; ?></small>
										<?php
									}
									?>
								</div>
								<div class="form-group">
									<label>Department</label>
									<select class="form-control" id="class" name="class">
										<option class="Computer Science & Tech"<?php if ($student['class'] == 'Computer Science & Tech')echo "selected"?>>Computer Science & Tech</option>
										<option class="Mobile Science & Tech"<?php if ($student['class'] == 'Mobile Science & Tech')echo "selected"?>>Mobile Science & Tech</option>
										<option class="Wood Science & Tech"<?php if ($student['class'] == 'Wood Science & Tech')echo "selected"?>>Wood Science & Tech</option>
										<option class="Automobile Science & Tech"<?php if ($student['class'] == 'Automobile Science & Tech')echo "selected"?>>Automobile Science & Tech</option>
									</select>
								</div>
								<div class="form-group">
									<label>Roll</label>
									<input type="number" name="roll" id="roll" class="form-control" value="<?php echo $student['roll'];?>">
									<?php
									if(isset($_GET['roll_error'])){
										?>
										<small style="color: red" id="roll_error"><?php echo $_GET['roll_error']; ?></small>
										<?php
									}
									?>
								</div>
								<br>
								<button name="update" class="btn btn btn-primary">Update</button>
							</form>
							<?php
						}


					}else{
						echo "No Data Found!";
					}

					?>

					
					<?php
				}else{
					echo "You don't pass any id.";
				}


				?>
				
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