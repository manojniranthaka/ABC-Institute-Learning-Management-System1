<?php

require_once('connection.php');
session_start();

if (isset($_POST['Enroll'])) 
{

	if(empty($_POST['Enroll']))

{
	header("location:login.php?Empty= Please fill in the Blanks");
}

else
{
	$query="select * from course where enroll_id='".$_POST['Enroll']."'";

	$result=mysqli_query($con,$query);

	if (mysqli_fetch_assoc($result)) 

	{
		$_SESSION['User']=$_POST['UName'];
		header("location:home.php");
	}else
	{
		header("location:login.php?Invalid= Please Enter Correct User Name and Password");
	}

}
}



else
{
	echo 'Not Working';
}

?>