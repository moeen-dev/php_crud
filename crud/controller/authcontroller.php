<?php
include_once 'db.php';
session_start();

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "INSERT INTO users(`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

	$query = $conn->query($sql);

	if ($query == TRUE) {
		$_SESSION['email'] = $email;
		header("Location: ../index.php");
	}else{
		header("Location: ../register.php");
	}
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' ";

	$query = $conn->query($sql);
	
	if ($query->num_rows > 0) {
		$_SESSION['email'] = $email;
		header("Location: ../index.php");
	}else{
		header("Location: ../login.php");
	}
}

?>