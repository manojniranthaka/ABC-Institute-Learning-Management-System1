<?php 

$con = mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("abc_institute")or die("not found");

$id = $_GET['id']; 
if ($id == $_GET['id']) {

$query = "DELETE FROM course WHERE id = $id";  
mysql_query($query);

	
$message = "wrong answer";

		echo "<script type='text/javascript'> alert('Delete Successfull'); window.location.href='viewall.php' </script>";
  
    
   
}

else{

	echo " Not Successfull!";
}


 ?>

