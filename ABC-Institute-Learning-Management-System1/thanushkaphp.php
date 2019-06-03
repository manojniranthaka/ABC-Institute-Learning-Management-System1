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


//if (isset($_POST['submit'])) {
//	# code...
//	#$name = $_POST['name'];
//	#$date = $_POST['date'];
//	#$exampleFormControlTextarea1 = $_POST['exampleFormControlTextarea1'];
//	$catagory = $_POST['catagory'];
//	$noticeData = $_POST['number'];
//
//	$sql = "INSERT INTO notice (date, title, details)
//	VALUES (now(), '$catagory', '$noticeData')";
//
//	if (mysqli_query($conn, $sql)) {
//    	header("Refresh:0; url=addnotices.php");
//	} else {
//  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//	}
//
//}

if(isset($_POST['Submit'])) {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $notice = $_POST['notice'];


    // checking empty fields
    if(empty($title) || empty($year) || empty($semester) || empty($notice)) {
        if(empty($title)) {
            echo "<script type='text/javascript'> alert('Title is Empty'); window.location.href='addnotices.php' </script>";
        }

        if(empty($year)) {
            echo "<script type='text/javascript'> alert('Year is Empty'); window.location.href='addnotices.php' </script>";
        }

        if(empty($semester)) {
           echo "<script type='text/javascript'> alert('Semester is Empty'); window.location.href='addnotices.php' </script>";
        }

        if(empty($notice)) {
           echo "<script type='text/javascript'> alert('Notice is Empty'); window.location.href='addnotices.php' </script>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($conn, "INSERT INTO notice (date,year,semester, title, details) VALUES(now(),'$year','$semester','$title','$notice')");
        header("Refresh:0; url=addnotices.php");

        //display success message
//        echo "<font color='green'>Data added successfully.";
//        echo "<br/><a href='index.php'>View Result</a>";
        echo "<script type='text/javascript'> alert('Successfull'); window.location.href='addnotices.php' </script>";
  
    }
}


 ?>