<?php
include_once 'controller/db.php';

session_start();

if (!isset($_SESSION['email'])) {
	header("Location: login.php");
}




?>