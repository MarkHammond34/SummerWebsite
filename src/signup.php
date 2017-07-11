<?php

require 'db_connection.php';

/** Create connection by calling function from db_connection.php */
$link = makeConnection();

 /** Retrieve data from form POST */
 $first_name = $_POST['first-name'];
 $last_name = $_POST['last-name'];
 $email = $_POST['email'];
 $password1 = $_POST['pwd'];
 $password2 = $_POST['pwd2'];
 $school = $_POST['school'];
 $state = $_POST['state'];
 $major = $_POST['major'];
 $year = $_POST['year'];
 $gender = $_POST['gender'];
 
 /** SQL insert statement */
 $sql = "INSERT INTO student_tips.users VALUES ('$first_name', '$last_name', '$email', '$password1', '$school', '$state', '$major', '$year', '$gender')"; 
 
 /** Run and check to make sure insert was successful */
 if (!$link->query($sql)) {
 	die('Error: ' . mysqli_error($link));
 }
 
 /** Close mysql connection */
 closeConnection($link);
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Tips</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="findmyschool.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<img src="images/logo.png" id="logo" alt="Students Tips" width="125"
					height="40" />
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="FindMySchool.html">Find My School</a></li>
					<li><a href="#">General Tips</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
							Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid bg-1 text-center">
		<div class="row content">
			<!-- LEFT SIDE NAVIGATION -->

			<div class="col-sm-2 sidenav">
				<p>
					<a href="#">Link</a>
				</p>
				<p>
					<a href="#">Link</a>
				</p>
				<p>
					<a href="#">Link</a>
				</p>
			</div>

			<!-- MIDDLE BODY -->
			<div class="col-sm-8 middle-info text-left thanks-banner">
				<h1>Thanks for registering!</h1>
			</div>

			<!-- RIGHT SIDE NAVIGATION -->
			<div class="col-sm-2 sidenav">
				<div class="well">
					<p>ADS</p>
				</div>
				<div class="well">
					<p>ADS</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<p>Created By Corey Kuehl & Mark Hammond</p>
	</footer> 
</body>
</html>