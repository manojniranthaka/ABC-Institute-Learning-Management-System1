 

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "abc_institute";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn ,"abc_institute");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>