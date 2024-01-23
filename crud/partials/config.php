<?php

switch ($_SERVER['SCRIPT_NAME']) {
	case '/moeen22/add-student.php':
	$page = 'add-student';
	$name = 'Add student';
	break;

	case '/moeen22/login.php':
	$page = 'login';
	$name = 'Login';
	break;

	case '/moeen22/register.php':
	$page = 'register';
	$name = 'Register';
	break;
	
	default:
	$page = 'index';
	$name = 'Home';
	break;
}

?>
