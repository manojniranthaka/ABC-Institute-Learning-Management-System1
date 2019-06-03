<?php

$con = mysqli_connect('localhost', 'root', '', 'abc_institute');

if (!$con) {
	die('Please Check the Connection'.mysqli_error($con));
}

?>