<?php 
session_start();
if (!isset($_SESSION['User'])) {
    header("location:login.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC Institute</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            background-image: url("");
        }

        
    color: #ffffff;
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
  top:1100px;
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

{box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.fa {
  padding: 2px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

    </style>
</head>

<body>

    <div class="row">

        <div class="col-sm-2">
            <img class="headbar_img" src="img/LOGOO.png">
        </div>
        <div class="col-sm-2 offset-sm-8" >



             <?php


 

  if (isset($_SESSION['User'])) 
  {
       echo 'Welcome ' . $_SESSION['User'].'<br/>';
       echo '<a href="login.php?logout">Logout</a>';

  }
    
  
  ?>

     <img style="margin-left: 80px; " src="img/usernew.png" alt="logo" />
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
                    <a class="nav-link" style="background-color:rgb(5, 24, 115);  " href="home.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
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
                        <a class="dropdown-item" href="feedback.php">Feedback</a>
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

<div class="logot">
  
<!--  -->
</div>


<br><br><br>


<diAv class="row">





  <div class="column" style="float: left;width: 20%">


   <form style="width: 340px; height: 400px; background-color:transparent;  margin-left:30px; border-style:none;"  >
    




    <?php 

$con = mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("abc_institute")or die("not found");



$sql01 = "SELECT title FROM  notice";


$records01 = mysql_query($sql01);



?>  





 <h5 style="font-family: fantasy;margin-left:20px; color: darkblue"><img src="img/speaker.png" alt="logo" /> Latest announcements  </h5> 


 


  <table  onclick="location.href='notice_view.php'" style="font-family: monospace; cursor: pointer; border-style: hidden; font-size: 15px; margin-top: 20px; margin-left: 10px" width="250px" border="none" cellpadding="5" cellspacing="5"   >
<tr>



</tr> 


 


 <?php


while ($notice = mysql_fetch_assoc($records01)) {
echo "<tr>";

echo "<td>".$notice['title']."</td>";



echo "</tr>";
}
 ?>

</table>
</form>
    


 <form style="width: 340px; height: 400px; background-color:transparent;  margin-left:20px; border-style:none;"  >






    <h5 style="font-family: fantasy;margin-left:30px; color: darkblue"><img src="img/reachus.png" alt="logo" /> Reach_Us </h5> 

    <br>


<h5  onclick="location.href='https://www.sliit.lk/'" style="font-family: monospace; font-size: 13px; margin-left: 18px; cursor: pointer;"><img src="img/web.png" alt="logo" /> WWW.ABCInstitute.lk  </h5>


<h5  onclick="location.href='https://www.sliit.lk/'" style="font-family: monospace; font-size: 13px; margin-left: 18px; cursor: pointer;"><img src="img/email.png" alt="logo" /> info@ABCInstitute.lk  </h5>

<h5  onclick="location.href='https://www.sliit.lk/'" style="font-family: monospace; font-size: 13px; margin-left: 18px; cursor: pointer;"><img src="img/tel.png" alt="logo" /> 0112 685 685 </h5>


<a style="margin-left: 30px" href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>


    





</form>


  </div>







  <div class="column" style="float: center; width: 57%">
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 1</div>
  <img src="img/s1.jpg" style="width:100%;">
  <div class="text">Caption One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/s2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/s3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/s4.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/s5.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>



</div>



  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 


   </div>

<br>

<div class="container" style="margin-left:32px">

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="notice_view.php" target="_blank">
          <img src="img/notice.png" alt="Lights" style="width:70%">
          <div class="caption">
           <!--  <p>*Check your Notices here!</p> -->
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/cource.png" alt="Nature" style="width:70%">
          <div class="caption">
           <!--  <p>Explore the newly added Courses.</p> -->

          </div>
        </a>
       </div>
    </div>




   
    <div class="col-md-4">
      <div class="thumbnail">


          <a href="library.php" target="_blank">
          <img src="img/library.png" alt="Nature" style="width:70%">
          <div class="caption">
       <p>Books at your finger Print.</p>
          </div>
        </a>
    </div>
  </div>

 </div>




    </div>

  </div>





<!-- 
  ___________________________________________________________________________________________________________ -->



   <div class="column" style="float: right;width: 20%">



    <?php 

$con = mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("abc_institute")or die("not found");



$sql01 = "SELECT title,start FROM  tbl_events ";


$records01 = mysql_query($sql01);



?>  

 <form style="width: 340px; height: 500px; background-color:transparent;  margin-left:35px; border-style:none;"  >



 <h5  style="font-family: fantasy;margin-left:70px; color: darkblue"><img src="img/calendar.png" alt="logo" /> Upcoming Event</h5> 
 


 <table style="font-family: monospace; border-style: hidden; font-size: 15px; margin-top: 20px; margin-left: 20px" width="300px" border="none" cellpadding="5" cellspacing="5"   >
<tr>

 <th style=" float: center;">Event</th> 
<th style="float: center; margin-left: 100px;">Date</th> 



  

</tr>   



</form> 



 


 <?php


while ($tbl_events = mysql_fetch_assoc($records01)) {
echo "<tr>";
echo "<td>".$tbl_events['title']."</td>";
echo "<td>".$tbl_events['start']."</td>";




echo "</tr>";
}
 ?>

</table>
  


 <h5 onclick="location.href='feedback.php' "  style="font-family: fantasy;  cursor: pointer; margin-left:20px; margin-top: 80px; color: darkblue; "> Provide Feedback to ABC Institute </h5> 
    
<img  onclick="location.href='feedback.php' " src="img/Feedbacknew.jpg" width="300px" height="280px" style="margin-top: 10px; cursor: pointer; " /> 

  </div>



<!--   ______________________________________________________________________________________________________
 -->





</div>


<br>




<table style="border-style: solid; ">
  

</table>











<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}



</script>


<br>
<br>




<div  class="footer" style="font-size: 14px;">
			Copyright @ A B C Institute 2019 - All rights Reserved
</div>




</body>
</html>