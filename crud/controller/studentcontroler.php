<?php

include_once 'db.php';


// Add Student

if(isset($_POST['save'])){
	$name = $_POST['name'];
	$class = $_POST['class'];
	$roll = $_POST['roll'];

	$error = array();
	if (empty($name)) {
		$error['name_error'] = "Please Insert Name*";
	}
	if (empty($roll)) {
		$error['roll_error'] = "Please Insert Roll*";
	}
	
	if (!empty($error)) {
		header("Location: ../add-student.php?".http_build_query($error));
	}else{
		$sql = "INSERT INTO student(`name`,`class`,`roll`) VALUES ('$name', '$class', '$roll')";
		$query = $conn->query($sql);


		if ($query == TRUE) {
			header("Location: ../index.php");
		}else{
			header("Location: ../add-student.php");
		}
	}
}

// Edit Student

if (isset($_POST['update'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$roll = $_POST['roll'];

	$error = array();
	if (empty($name)) {
		$error['name_error'] = "Please Insert Name*";
	}
	if (empty($roll)) {
		$error['roll_error'] = "Please Insert Roll*";
	}
	
	if (!empty($error)) {
		header("Location: ../edit-student.php?id=".$id.'&'.http_build_query($error));
	}else{
		$sql = "UPDATE student SET `name` = '$name', `class` = '$class', `roll` = '$roll' WHERE id = $id";
		$query = $conn->query($sql);


		if ($query == TRUE) {
			header("Location: ../index.php");
		}else{
			header("Location: ../edit-student.php?id=".$id);
		}
	}
}

// Delete Student
if (isset($_POST['delete'])) {
	$id =  $_POST['id'];

	$sql = "DELETE FROM student WHERE id=$id";
	$query = $conn->query($sql);

	if ($query == TRUE) {
		header("Location: ../index.php");
	}else{
		header("Location: ../index.php");
	}
}

?>