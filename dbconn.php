<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = ''; // Leave empty for XAMPP default
$database = 'lms';

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>