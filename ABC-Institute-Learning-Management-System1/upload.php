<?php 





$con = mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("abc_institute")or die("not found");



if (isset($_POST['submit'])) {
	# code...
	$regno = $_POST['regno'];


	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];

	

	

	$location = "file/$name";
	move_uploaded_file($tmp_name,$location);

	
   
    
   mysql_query("insert into uploadfile(regno,image)values('$regno','$location')");
 $message = "wrong answer";	

		echo "<script type='text/javascript'> alert('Successfull'); window.location.href='submitsucces.php' </script>";
  
    
   
}

else{

	echo " Not Successfull!";
}


 ?>