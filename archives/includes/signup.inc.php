<?php

if (isset($_POST["submit"])) {

	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$program = $_POST["program"];
	$level = $_POST["level"];
	$pwd = $_POST["pwd"]; 
	$pwdRepeat = $_POST["pwdConfirm"];
	
	require_once 'dbh.inc.php'; 
	require_once 'functions.inc.php';

	if (invalidEmail($email) !== false) {
		header("location: ../../index.php?error=invalidemail");
		exit();
	}

	if (pwdMatch($pwd, $pwdRepeat) !== false) {
		header("location: ../../index.php?error=passwordsdontmatch");
		exit();
	}

	if (uidExists($conn, $email) !== false) {
		header("location: ../../index.php?error=emailtaken");
		exit();
	}

	createUser($conn, $fname, $lname, $email, $program, $level, $pwd, $pwdRepeat);

} else {
	// header("location: ../logout.php");
	echo 'wrong';
	exit();
}
?>
