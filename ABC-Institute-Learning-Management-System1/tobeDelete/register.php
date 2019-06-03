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


    </style>
</head>

<body>

    <div class="row">

        <div class="col-sm-2">
            <img class="headbar_img" src="img/LOGOO.png">
        </div>
        <div class="col-sm-2 offset-sm-8">
            User image and logout button
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
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item custom_active">
                    <a class="nav-link" href="#">My Profile</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#">Time Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.html">Our Courses</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
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
                    <a class="nav-link" href="#">About Us</a>
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

                <button style="margin-right: 5px" class="btn custom_btn_1 my-2 my-sm-0" type="submit">Search</button>
                
            </form>
        </div>
    </nav>



  
  
      <div class="loginbox">
  
          <img src="img/interview.png" class="User">
          <h1 style="margin: 0;padding: 0 0 20px;text-align: center;font-size: 22px;">Register Here</h1>
  

          <div class="container">
        <div class="row">

                    <div class="form-group row">
                        <button type="button" class="btn custom_btn_2 col-sm-4 offset-sm-1">Edit</button>
                        <button type="button" data-toggle="modal" data-target="#changePswrdModalId" class="btn custom_btn_2 col-sm-4 offset-sm-1">Change Password</button>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-sm-4 col-form-label">
                            <b>First Name</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="text">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastName" class="col-sm-4 col-form-label">
                            <b>Last Name</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="text">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="Date of Birth" class="col-sm-4 col-form-label">
                            <b>Date of Birth</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="Date">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">
                            <b>Email</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="address1" class="col-sm-4 col-form-label">
                            <b>Address</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="text" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Contact Number" class="col-sm-4 col-form-label">
                            <b>Contact Number</b>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="Number" >
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
<!-- //Change password -->
 <div class="modal fade" id="changePswrdModalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
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
                       <!--  <div class="form-group row" style="margin: 0 auto">
                            <img id="pswrdChangeLoadingId" src="loading.gif" style=" width: 100px; height: 100px; margin: 0 auto; " />
                        </div> -->
                        <div id="pswrdSuccessAlertId" class="alert alert-success" role="alert">
                            Password Successfully Changed!.
                        </div>
                        <div id="pswrdErrorAlertId" class="alert alert-danger" role="alert">
                            Password Change Failed!
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn custom_btn_2">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <!--   <script>
        $(document).ready(function () {

            $('#pswrdSuccessAlertId').hide();
            $('#pswrdErrorAlertId').hide();
            $('#pswrdChangeLoadingId').hide();

            // Change Password Modal - on Password Form Submit
            $('#changePswrdFormId').on('submit', function (e) {

                $('#pswrdSuccessAlertId').hide();
                $('#pswrdErrorAlertId').hide();
                $('#pswrdChangeLoadingId').show();

                e.preventDefault();

                if ($('#newPswrdId').val() === $('#confirmPswrdId').val()) {

                    $.post("/resetPswrd",
                        {
                            currentPswrd: $('#currentPswrdId').val(),
                            newPswrd: $('#newPswrdId').val(),
                            userId: "1"
                        }
                    ).done(function (data) {
                        console.dir(data);
                        $('#pswrdSuccessAlertId').show();
                        $('#pswrdChangeLoadingId').hide();
                    }).fail(function (data) {
                        console.dir(data);
                        $('#pswrdErrorAlertId').html('Password Change Failed!');
                        $('#pswrdChangeLoadingId').hide();
                    });

                } else {
                    $('#pswrdErrorAlertId').show();
                    $('#pswrdChangeLoadingId').hide();
                    $('#pswrdErrorAlertId').html('Password Mismatch! Please enter same password for new password and confirm password.');
                }

            });

            // Button click event for modal popup - Clear form and validations
            $('.modal').on('hidden.bs.modal', function () {
                $("#changePswrdFormId").trigger('reset');
                $('#pswrdSuccessAlertId').hide();
                $('#pswrdErrorAlertId').hide();
                $('#pswrdChangeLoadingId').hide();

            });

        });

    </script> -->
<div  class="footer">
			Copyright @ A B C Institute 2019 - All rights Reserved
</div>
	</div>
</body>
</html>