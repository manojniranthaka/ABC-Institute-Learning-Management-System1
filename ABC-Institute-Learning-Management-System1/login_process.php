<?php

require_once('connection.php');
session_start();

if (isset($_POST['Login'])) 
{

	if(empty($_POST['UName']) || empty($_POST['Password']))

{
	header("location:login.php?Empty= Please fill in the Blanks");
}

else
{
	$query="select * from users where user_uid='".$_POST['UName']."' and user_pwd='".md5($_POST['Password'])."'";

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