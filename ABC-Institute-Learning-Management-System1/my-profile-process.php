<?php
session_start();
include_once('connection.php');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE users SET user_first= '".$_POST['first']."',user_last= '".$_POST['last']."',user_address= '".$_POST['address']."',user_email= '".$_POST['email']."',user_contact= '".$_POST['contact']."' WHERE user_uid='".$_SESSION['User']."'";


if ($con->query($sql) === TRUE) {
    // echo "Record updated successfully ".$_SESSION['User'];
    // echo "<br>";
    // echo $sql;
    header("Location: ./my-profile.php?s=1");
	die();
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>



























