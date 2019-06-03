<?php 
session_start();
if (!isset($_SESSION['User'])) {
    header("location:login.php");
} else {
    # code...
}

?>

<?php
include_once('connection.php');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql2="SELECT user_id,user_uid from users where user_uid='".$_SESSION['User']."'";
$res=mysqli_query($con, $sql2);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($res)) {
        $kk=$row2["user_id"];
    }
}  

else {
   $kk=0;
}

$sql = "SELECT * from  users where user_id=".$kk."";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        $ufname=$row["user_first"];
        $ulname=$row["user_last"];
        $uid=$row["user_uid"];
        $uemail=$row["user_email"];
        $uaddress=$row["user_address"];
        $ucontact=$row["user_contact"];
        $ucpass=$row["user_pwd"];
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            background-image: url("img/wall.png");
        }

        .headbar_img {
            width: 100%;
            padding: 10px;
        }

        .custom_navbar {
            background-color: #051873 !important;
            color: white !important;
            padding: 0 !important;
        }

       

        .nav-link {
            color: white !important;
        }

        .nav-item {
            padding: 5px !important;
        }

        .nav-item:hover {
            background-color: #5e9e06 !important;
        }

        .custom_btn_1 {
            background-color: #FFF;
            color: #003543;
        }

        .custom_btn_1:hover {
            background-color: #080423;
            color: white;
        }

        .custom_btn_2 {
            background-color: #080423;
            color: white;
        }

        .custom_btn_2:hover {
            background-color: #FFF;
            color:#080423;
            border-color: #080423;
        }

        .form-control:focus {
            border-color: #080423;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
        }

        .user_img {
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .social_media_icon {
            padding-right: 10px;
            font-size: 32px;
        }
		.footer{
	position:absolute;
	top:880px;
	width: 100%;
	right:0%;
	left:0%;
	height:40px;	
    padding-bottom :5px;
    padding-top : 5px;    
    background-color: #051873;
    text-align: center;
    color: white;
}

body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffa308;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 11px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #57b4e4;}
.topnav{
  position:absolute;
  top:75px;
  width:100%
}

ul.topnav li a.active {background-color: #003543;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}


.card-body{
  align:center;
  position:absolute;
  top:300px;
  widht:60%;
  right:20%;
  left:20%;
  background-color: transparent;
}


.login{
}

.form-control {
  border-color: #003543;
    height: 46px;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}

.form-control {
	border-color: #003543;
    height: 46px;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}


.adminHome {
	width: 900px;
	height: 520px;
	background: transparent;
	color: #003543;
	top: 360px;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;
}


.loginbox {
	width: 320px;
	height: 300px;
	background: transparent;
	color: #003543;
	top: 400px;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
	box-sizing: border-box;
	padding: 70px 30px;
}

.User {
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}

h1 {
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.loginbox p {
	margin: 0;
	padding: 0;
	font-weight: bold;
}

.loginbox input {
	width: 100%;
	margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"] , input[type="email"] {
	border: none;
	border-bottom: 1.5px solid #051873;
	background: transparent;
	outline: none;
	height: 40px;
	width:250px;
	color: #003543;
	font-size: 16px;
}

.loginbox input[type="submit"] {
	border: none;
	outline: none;
	height: 40px;
	background:#051873;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}

.loginbox input[type="submit"]:hover {
	cursor: pointer;
	background: #080423;
	color: white;
}

.loginbox a {
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
}

.loginbox a:hover {
	color: #57b4e4;
}

.form .Register-form {
	display: none;
}

.btn-primary {
    color: #fff;
    background-color: #080423;
    border-color: #080423;
}
    </style>
</head>
<body>

    <div class="row">

        <div class="col-sm-2">
            <img class="headbar_img" src="img/LOGOO.png">
        </div>
        <div class="col-sm-2 offset-sm-8">
             <?php 

  if (isset($_SESSION['User'])) 
  {
       echo 'Welcome ' . $_SESSION['User'].'<br/>';
       echo '<a href="login.php?logout">Logout</a>';

  }
    
  
  ?>
        </div>


    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom_navbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                   </li>
                <li class="nav-item custom_active">
                    <a class="nav-link" href="my-profile.php">MY Profile</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="timetable_view.php">Time Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student.php">My Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notice_view.php">Notices</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="auto" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Support Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Q & A</a>
                        <a class="dropdown-item" href="#">Feedback</a>
                        <div class="dropdown-item">Appoinment</div>
                        <a class="dropdown-item" href="#">Paper Marks</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <select class="selectpicker mr-sm-2" data-live-search="true">
                    <option data-tokens="PHYSICS">PHYSICS</option>
                    <option data-tokens="BIOLOGY">BIOLOGY</option>
                    <option data-tokens="COMBINED MATHEMATICS">COMBINED MATHEMATICS</option>
                    <option data-tokens="CHEMESTRY">CHEMESTRY</option>
                    <option data-tokens="ECONOMICS">ECONOMICS</option>
                    <option data-tokens="BUSINESS STUDIE">BUSINESS STUDIE</option>
                    <option data-tokens="ACCOUTING">ACCOUTING</option>

                </select>
                </select>

                <button style="margin-right: 5px" class="btn custom_btn_1 my-2 my-sm-0" type="submit">Search</button>
                
            </form>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<!-- //profile redirect -->

<?php
require_once('connection.php');
//session_start();

// $sql= "select * from users";
// $result=mysqli_query($con,$query);

?>

    <form style="padding: 120px" action="my-profile-process.php" method ="POST">

        <h1 style="font-size: 33px">My Profile</h1>

       
 
  <div class="form-row">

    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
        <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"  id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" name="uid" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" value="<?php echo $uid; ?>" disabled>
        <div class="invalid-feedback">
    
        </div>
    </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" name="first" id="validationCustom01" placeholder="First name" value="<?php echo $ufname; ?>" required>
      <div class="valid-feedback">
      
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" name="last" id="validationCustom02" placeholder="Last name" value="<?php echo $ulname; ?>"  required>
      <div class="valid-feedback">
      
      </div>
    </div>
    <div class="col-md-4 mb-3">
     
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Address</label>
      <input type="text" class="form-control" name="address" id="validationCustom03" placeholder="Address" value="<?php echo $uaddress; ?>" required>
      <div class="invalid-feedback">
      
      </div>
    </div>
 
  </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">E-mail</label>
      <input type="text" class="form-control" name="email" id="validationCustom03" placeholder="E-Mail" value="<?php echo $uemail; ?>" required>
      <div class="invalid-feedback">
      
      </div>
    </div>
 
  </div>
      <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Contact Number</label>
      <input type="text" class="form-control" name="contact" id="validationCustom03" placeholder="Contact Number" value="<?php echo $ucontact; ?>" required>
      <div class="invalid-feedback">
      
      </div>
    </div>
 
<br>
</div>
<div>
<button class="btn btn-primary" name="submit" type="submit" > Save Changes</button>

<p id="demo"><?php echo (isset($_GET['s']) && $_GET['s'] == 1)? 'Updated!' : ''; ?></p>

<!-- 
                 <div class="form-group row">
                        <button style="margin-left: 1%;" type="button" data-toggle="modal" data-target="#changePswrdModalId" class="btn custom_btn_2 col-sm-4 offset-sm-1">Change Password</button>
                    </div>
                     <div class="modal fade" id="changePswrdModalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding-right: 10%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-unlock-alt"></i> &nbsp;
                        <b> Change Password </b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="changePswrdFormId">
                        <div class="form-group row">
                            <label for="currentPswrdId" class="col-sm-6 col-form-label">Current Password</label>
                            <div class="col-sm-6">
                                <input type="password" required class="form-control" id="currentPswrdId" placeholder="Current Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newPswrdId" class="col-sm-6 col-form-label">New Password</label>
                            <div class="col-sm-6">
                                <input type="password" required class="form-control" id="newPswrdId" placeholder="New Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirmPswrdId" class="col-sm-6 col-form-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <input type="password" required class="form-control" id="confirmPswrdId" placeholder="Confirm Password">
                            </div>
                        </div>
                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn custom_btn_2">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->




</form>
</div>





<div  class="footer">
			Copyright @ A B C Institute 2019 - All rights Reserved
</div>
	</div>



</body>
</html>