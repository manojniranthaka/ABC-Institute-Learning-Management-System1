<?php 
session_start();
if (!isset($_SESSION['name'])) {
    header("location:adminhome.php");
} else {
    # code...
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABC Institute</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            background-image: url("img/addcoursewall.png");
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
            background-color: #080423 !important;
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
h1 {
    margin: 121px;
    padding: 1px 5px 8px;
    text-align: center;
    font-size: 41px;
    color: #051873;
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


 

  if (isset($_SESSION['name'])) 
  {
       echo 'Welcome ' . $_SESSION['name'].'<br/>';
       echo '<a href="adminhome.php?logout">Logout</a>';

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
                    <a class="nav-link" href="adminhome.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
               
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="auto" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Time Table
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="addtimetable.php">Add time table</a>
                        <a class="dropdown-item" href="admin_timetable_view.php">All time table</a>
                       
                    </div>
             <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="auto" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Lectures
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="addcourse.php">Add Lectures</a>
                        <a class="dropdown-item" href="viewall.php">All Lectures</a>
                       
                    </div>
            </li>
             




                 <li class="nav-item">
                    <a class="nav-link" href="addnotices.php">Add Notices</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="pdfview.php"> Assignments view</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="manoriphp.php">Add Books/ Library</a>
                </li>
                     <li class="nav-item">
                    <a class="nav-link" href="index.php">Event Calendar</a>
                </li>
                </li>
                     <li class="nav-item">
                    <a class="nav-link" href="feedback_view.php">Feedback view</a>
                </li>


              
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<!--   CODE EK DAPn -->
 <h1 style="font-family: fantasy;  padding-right: 15%; font-size: 40px; color: darkblue; margin-top: 40px; margin-left: 500px"> ADD LESSONS </h1> 
  
<form  action="sajinikaphp.php" method="post" style="    padding-left: 22%;" enctype="multipart/form-data">
  <table width="90%" align="center">
    


<tr>
<td>
    <label for="title">Title</label>
</td> 
<td>
    <input type="text" name ="title" maxlength="50px" size="30" required="">
</td>
</tr>

<tr>
<td>
    <label for="teacher">Teacher</label>
</td> 
<td>
    <input type="text" name ="teacher" maxlength="50px" size="30" required="">
</td>
</tr>
<tr>

<tr>
 

<td>
    <label for="upload">Upload File</label>
</td>
<td>
<input type="File" name="upload" required="">

</td>

</tr>


<tr>
    <td align="center">
        <button type="submit" value="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <!-- <input type="submit" value="submit" name="submit"> -->
    </td>

 <td >
    <button type="reset" value="reset" class="btn btn-outline-danger">Reset</button>
  <!--       <input type="reset" value="reset"> -->
    </td>

</tr>
    

</tr>

  </table>
</form>















<div  class="footer">
			Copyright @ A B C Institute 2019 - All rights Reserved
</div>



	</div>
</body>
</html>