<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "quicksign";

// Create connection
$conn = new mysqli($serverName, $dBUserName, $dBPassword, $dBName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
