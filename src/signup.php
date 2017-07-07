<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Tips</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="signup.css" type="text/css" rel="stylesheet" />
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
					<li><a href="#">Find My School</a></li>
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
			<div class="col-sm-8 middle-info text-left">
				<h1>Welcome</h1>
				<p>This is going to be a brief description of what people can do
					on the website.</p>
				<hr>
				<h3>Sign up for free!</h3>
				<h2>Need to make this the correct form type</h2>
				<!-- SIGN UP FORM -->
				<div>
					<form action="signup.php" method="post">
						<!-- First Name -->
						<div class="form-group">
							<label>First Name</label> <input type="text" class="form-control"
								id="first-name" placeholder="Enter your first name"
								name="first-name">
						</div>
						<!-- Last Name -->
						<div class="form-group">
							<label>Last Name</label> <input type="text" class="form-control"
								id="last-name" placeholder="Enter your last name"
								name="last-name">
						</div>
						<!-- Email -->
						<div class="form-group">
							<label>Email</label> <input type="text" class="form-control"
								id="email" placeholder="Enter your email" name="email">
						</div>
						<!-- Password -->
						<div class="form-group">
							<label>Password</label> <input type="password"
								class="form-control" id="password"
								placeholder="Enter a password" name="pwd">
						</div>
						<!-- Password2 -->
						<div class="form-group">
							<label>Password Again</label> <input type="password"
								class="form-control" id="password2"
								placeholder="Reenter your password" name="pwd2">
						</div>
						<!-- State -->
						<div class="form-group">
							<label>State</label> <br> <select name="state" id="state">
								<option value="" selected="selected">Select a State</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>
						</div>
						<!-- School -->
						<div class="form-group">
							<label>School</label> <input type="text" class="form-control"
								id="last-name" placeholder="Enter your college/university"
								name="school">
						</div>
						<!-- Major -->
						<div class="form-group">
							<label>Major</label> <input type="text" class="form-control"
								id="major" placeholder="Enter your major" name="major">
						</div>
						<!-- Year -->
						<div class="form-group">
							<label>Year</label> <br> <select name="year" id="year">
								<option value="" selected="selected">Select your year</option>
								<option value="AL">Freshman (1st Year)</option>
								<option value="AK">Sophemore (2st Year)</option>
								<option value="AZ">Junior (3rd Year)</option>
								<option value="AR">Senior (4+ Year)</option>
							</select>
						</div>
						<!-- Gender -->
						<div class="form-group">
							<label>Gender</label> <br> <select name="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="other">Other</option>
							</select>
						</div>
						<br>
						<button type="submit" value="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
			<!-- END FORM -->

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

<?php

define('DB_NAME', 'student_tips');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

/** Make connection */
 $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 
 /** If connection is not made, print error */
 if (!$link) {
 	die('Could not connect: ' . mysql_error());
 }
 
 /** Select the database */
 $db_selected = mysql_select_db(DB_NAME, $link);
 
 /** If db not selected, print error */
 if (!$db_selected) {
 	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
 }
 
 /** Retrieve data from form POST */
 $first_name = $_POST['first-name'];
 $last_name = $_POST['last-name'];
 $email = $_POST['email'];
 $password1 = $_POST['pwd'];
 $password2 = $_POST['pwd2'];
 $school = $_POST['school'];
 $major = $_POST['major'];
 $year = $_POST['year'];
 $gender = $_POST['gender'];
 
 /** SQL insert statement */
 $sql = "INSERT INTO student_tips.users VALUES ('$first_name', '$last_name', '$email', '$password1', '$school', '$major', '$year', '$gender')"; 
 
 /** Run and check to make sure insert was successful */
 if (!mysql_query($sql)) {
 	die('Error: ' . mysql_error());
 }
 
 /** Close mysql connection */
 mysql_close();
 
 ?>
 
</body>
</html>