<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc_institute";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


if (isset($_POST['submit'])) {
	# code...
	#$name = $_POST['name'];
	#$date = $_POST['date'];
	#$exampleFormControlTextarea1 = $_POST['exampleFormControlTextarea1'];
	$catagory = $_POST['catagory'];
	$noticeData = $_POST['number'];

	$sql = "INSERT INTO notice (date, title, details)
	VALUES (now(), '$catagory', '$noticeData')";

	if (mysqli_query($conn, $sql)) {
    	header("Refresh:0; url=thanushka.php");
	} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}


 ?>