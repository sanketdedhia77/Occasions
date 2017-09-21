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

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


mysqli_query($connect,"INSERT INTO contact (username,emailid,password)
		        VALUES ('$name','$email','$password')");
		        if(mysqli_affected_rows($connect) > 0){
    echo "<p>guest Added</p>";
} else {
    echo "guest NOT Added<br />";
    echo mysqli_error ($connect);
    }



		        ?>