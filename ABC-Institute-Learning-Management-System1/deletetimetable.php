<?php 

$con = mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("abc_institute")or die("not found");

$id = $_GET['tid']; 
if ($id == $_GET['tid']) {

$query = "DELETE FROM timetable WHERE tid = $id";  
mysql_query($query);


	
$message = "wrong answer";

		echo "<script type='text/javascript'> alert('Delete Successfull'); window.location.href='admin_timetable_view.php' </script>";
  
    
   
}

else{

	echo " Not Successfull!";
}


 ?>

