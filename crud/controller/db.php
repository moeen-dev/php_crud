<?php
$dbservername = 'localhost';

$dbusername = 'root';

$dbpassword = '';

$dbtablename = "project24";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbtablename);

if ($conn->connect_error) {
	die('Error0-'.$conn->connect_error);
}
?>