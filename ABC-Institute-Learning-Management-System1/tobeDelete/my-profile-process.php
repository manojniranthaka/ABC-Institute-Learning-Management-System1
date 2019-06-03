<?php

require_once('connection.php');
session_start();

if (isset($_POST['submit'])) 
{

	if(empty($_POST['first']) || empty($_POST['last']))

{
	header("location:login.php?Empty= Please fill in the Blanks");
}

else
{
	$query="select * from users where user_first='".$_POST['first']."' and user_last='".($_POST['last'])."'";

	$result=mysqli_query($con,$query);

	if (mysqli_fetch_assoc($result)) 

	{
		$_SESSION['User']=$_POST['fi'];
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