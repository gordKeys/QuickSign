<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["submit"])) {

	$username = $_POST["uid"];
	$pwd = $_POST["pwd"];

	require_once 'dbh.inc.php'; 
	require_once 'functions.inc.php';

	loginUser($conn, $username, $pwd);
} else {
	header("location: logout.inc.php");
	exit();
}
?>
