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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
        .panel-body {
            padding: 2px;
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

            <li class="nav-item">
                <a class="nav-link" href="#">Time Tables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addcourse.php">Add Courses And Lectures</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewall.php">Edit Courses And Lectures</a>
            </li>




            <li class="nav-item">
                <a class="nav-link" href="#">Add Notices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add Assignments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Add Books/ Library</a>
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


<!--   CODE EK DAPn -->


<div class="container">


    <div id="signupbox" style=" margin-top:50px" >
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title" style="padding: 10px; height: 400px">Notice Upload Center
                    <div class="panel-body" >
                        <form action="thanushkaphp.php" method="post" name="form1">
                            <table width="50%" border="0">
                                <td>Title</td>
                                <td><input type="text" name="title"></td><br/>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td><input type="number" name="year"></td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td><input type="number" name="semester"></td>
                                </tr>
                                <tr>
                                    <td>Notice</td>
                                    <td><input type="text" name="notice"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="Update" value="Submit"></td>
                                </tr>
                            </table>
                        </form>

                    </div>

                    <?php
                    $db_host = 'localhost'; // Nama Server
                    $db_user = 'root'; // User Server
                    $db_pass = ''; // Password Server
                    $db_name = 'abc_institute'; // Nama Database

                    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                    if (!$conn) {
                        die ('Fail to connect to MySQL: ' . mysqli_connect_error());
                    }

                    $sql = 'SELECT * 
                            FROM notice';

                    $query = mysqli_query($conn, $sql);

                    if (!$query) {
                        die ('SQL Error: ' . mysqli_error($conn));
                    }

                    echo '<table class="table table-sm table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DATE</th>
                                    <th>YEAR</th>
                                    <th>SEMESTER</th>
                                    <th>TITLE</th>
                                    <th>NOTICE DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>';

                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['year'].'</td>
                                <td>'.$row['semester'].'</td>
                                <td>'.$row['title'].'</td>
                                <td>'.$row['details'].'</td>
                                <td>
                                    <a href=\"editnotice.php?id=$res[id]\">Edit</a> | <a href=\"deletenotice.php?id=$res[id]\" onClick=\"return confirm(\'Are you sure you want to delete?\')\">Delete</a>
                                </td>
                            </tr>';
                    }
                    echo '
                        </tbody>
                    </table>';



                    // Should we need to run this? read section VII
                    mysqli_free_result($query);

                    // Should we need to run this? read section VII
                    mysqli_close($conn);

                    ?>


                </div>
            </div>
        </div>
    </div>




</div>

</div>




</div>
</body>
</html>*