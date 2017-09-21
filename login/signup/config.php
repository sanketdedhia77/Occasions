<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$name=$_POST['Username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO login (username, emailid, password)
VALUES ($name, $email, $password)";
?>