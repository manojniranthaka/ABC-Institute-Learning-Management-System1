<?php 

$con = mysql_connect("localhost","root","")or die("not connected");

mysql_select_db("abc_institute")or die("not found");


if (isset($_POST['submit'])) {
	# code...
	$location = $_POST['location'];
	$date = $_POST['date'];
    $details = $_POST['details'];
	$outcome = $_POST['outcome'];


	
      
   mysql_query("Insert into feedback(location,date,details,outcome)values('$location','$date','$details','$outcome')");


       $message = "wrong answer";

		echo "<script type='text/javascript'> alert('Successfull'); window.location.href='feedback.php' </script>";
  
    
   
}

else{

	echo " Not Successfull!";
}


 ?>