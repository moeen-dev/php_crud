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
		<a href="add-student.php" class="btn btn btn-info mb-3 mt-3">Add Student</a>
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Department</th>
							<th scope="col">Roll</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$count = 1;
						$sql = "SELECT * FROM student ORDER BY `roll` ASC";
						$query = $conn->query($sql);

						if($query->num_rows > 0){
							while ($student = $query->fetch_assoc()) {
								?>
								<tr>
									<th scope="row"><?Php echo $count++; ?></th>
									<td><?php echo $student['name']; ?></td>
									<td><?php echo $student['class']; ?></td>
									<td><?php echo $student['roll']; ?></td>
									<td class="d-flex">
										<a href="edit-student.php?id=<?php echo $student['id'];?>" class="btn btn-success me-2">Edit</a>

										<form action="controller/studentcontroler.php" method="POST">
											<input type="hidden" name="id" value="<?php echo $student['id'] ?>">
											<button name="delete" class="btn btn-danger" onclick="return confirm('Do you want to delete it?') ">Delete</button>
										</form>
									</td>

								</tr>
								<?Php
							}
						}
						?>

					</tbody>
				</table>	
			</div>
		</div>
	</div>



	<?php include_once 'partials/footer.php'; ?>

</body>
</html>