<?php

require_once('connection.php');
session_start();

if (isset($_POST['ALogin']))  {

	if(!empty($_POST['name']) && !empty($_POST['pass'])){

		$query="select * from admin where name='".$_POST['name']."' and pass='".$_POST['pass']."'";

		$result=mysqli_query($con,$query);

		if (mysqli_fetch_assoc($result)){
			$_SESSION['name']=$_POST['name'];
			header("location:adminhome.php");
		}else{
			header("location:adminlogin.php?Invalid= Please Enter Correct User Name and Password");
		}
	}

}else{
	header("location:adminlogin.php?Invalid= Please Enter Correct User Name and Password");

}


?>