<?php
if(isset($_POST['submit'])){

	require 'db.php';
//echo "string";
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);

	//Error handling
	//check empty fields

	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($address) || empty($contact)) {

		header("Location: ./signup.php?signup=empty");
		exit();
	}else{

		//if valid inputs
		if (preg_match("/^[a-zA-Z]*$/", $first) && preg_match("/^[a-zA-Z]*$/", $last)){
		 	

		// 	header("Location: ../signup.php?signup=invalid");
		// 	exit();
		// }else{
			//check the email validation
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ./signup.php?signup=email");
				exit();
			}else{
				$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
				$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ./signup.php?signup=usertaken");
					exit();
				}else{ 
					//hashing the password
					$hashedPwd = md5($pwd);
					//insert the user inyo the message
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_address, user_contact ) VALUES ('$first' , '$last', '$email', '$uid', '$hashedPwd', '$address', '$contact')";
					mysqli_query($conn,$sql ) or die(mysqli_error($conn));

					header("Location: ./login.php");
					exit();
				 

				}
}
			}
		}
	}
	