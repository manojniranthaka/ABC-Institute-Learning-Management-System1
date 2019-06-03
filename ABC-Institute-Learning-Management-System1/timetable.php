<?php 

$con = mysql_connect("localhost","root","")or die("not connected");

mysql_select_db("abc_institute")or die("not found");


if (isset($_POST['submit'])) {
	# code...
	$year = $_POST['year'];
	$semester = $_POST['semester'];


	$name = $_FILES['upload']['name'];
	$tmp_name = $_FILES['upload']['tmp_name'];

	

	$location = "pdf_upload/$name";
	move_uploaded_file($tmp_name,$location);

	mysql_query("Insert into timetable(year,semester,upload)values('$year','$semester','$location')");

       $message = "wrong answer";

		echo "<script type='text/javascript'> alert('success'); window.location.href='admin_timetable_view.php' </script>";
  
    
   
}

else{

	echo "Fail";
}

 ?>
