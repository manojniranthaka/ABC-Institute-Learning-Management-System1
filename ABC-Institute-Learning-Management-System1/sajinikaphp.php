<?php 

$con = mysql_connect("localhost","root","")or die("not connected");

mysql_select_db("abc_institute")or die("not found");


if (isset($_POST['submit'])) {
	# code...
	$subject = $_POST['subject'];
	$title = $_POST['title'];
	$teacher = $_POST['teacher'];

	$name = $_FILES['upload']['name'];
	$tmp_name = $_FILES['upload']['tmp_name'];

	

	$location = "pdf_upload/$name";
	move_uploaded_file($tmp_name,$location);


	
   
    
   mysql_query("Insert into course(subject,title,teacher,upload)values('$subject','$title','$teacher','$location')");




       $message = "wrong answer";

		echo "<script type='text/javascript'> alert('Successfull'); window.location.href='adminview.php' </script>";
  
    
   
}

else{

	echo " Not Successfull!";
}


 ?>