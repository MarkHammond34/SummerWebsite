<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Tips</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="tips.css" type="text/css" rel="stylesheet" />
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
				<h1 class="school-title">Benedictine University - Computer
					Science</h1>
				<div>
					<!-- Left-aligned media object -->
					<div class="media-content">
						<div class="media-left">
							<img src="images/avatar1.png" class="media-object"
								style="width: 60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading"><?php $test_name; ?></h4>
							<p id="tip1-tip">This will be where the tip goes. I am just adding text
								here to test out how the text will wrap around. TEST TEST TEST
								TEST TEST TEST TEST TEST</p>
						</div>
						<div class="media-buttons">
							<button type="button" class="btn" id="dislike-button"></button>
							<button type="button" class="btn" id="like-button"></button>
						</div>
					</div>
					<!-- Left-aligned media object -->
					<div class="media-content">
						<div class="media-left">
							<img src="images/avatar2.png" class="media-object"
								style="width: 60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Steve Schultz</h4>
							<p>This will be where the tip goes. I am just adding text
								here to test out how the text will wrap around. TEST TEST TEST
								TEST TEST TEST TEST TEST</p>
						</div>
						<div class="media-buttons">
							<button type="button" class="btn" id="dislike-button"></button>
							<button type="button" class="btn" id="like-button"></button>
						</div>
					</div>
					<!-- Left-aligned media object -->
					<div class="media-content">
						<div class="media-left">
							<img src="images/avatar6.png" class="media-object"
								style="width: 60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Jacob Trumpis</h4>
							<p>This will be where the tip goes. I am just adding text
								here to test out how the text will wrap around. TEST TEST TEST
								TEST TEST TEST TEST TEST</p>
						</div>
						<div class="media-buttons">
							<button type="button" class="btn" id="dislike-button"></button>
							<button type="button" class="btn" id="like-button"></button>
						</div>

					</div>
					<!-- Left-aligned media object -->
					<div class="media-content">
						<div class="media-left">
							<img src="images/avatar4.png" class="media-object"
								style="width: 60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Corey Kuehl</h4>
							<p>This will be where the tip goes. I am just adding text
								here to test out how the text will wrap around. TEST TEST TEST
								TEST TEST TEST TEST TEST</p>
						</div>
						<div class="media-buttons">
							<button type="button" class="btn" id="dislike-button"></button>
							<button type="button" class="btn" id="like-button"></button>
						</div>
					</div>
					<hr>
				</div>
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
	
	<!-- php put here for testing purposes -->
	<?php 
	
	define('DB_NAME', 'student_tips');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	
	/** Make connection */
	$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	/** If connection is not made, print error */
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	/** Select the database */
	$db_selected = mysql_select_db(DB_NAME, $con);
	
	/** If db not selected, print error */
	if (!$db_selected) {
		die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
	}
	
	/** Query statement */
	$sql = "SELECT first_name, last_name, tip, date FROM tips";
	$result = $con->query($sql);
	
	/** If there are results */
	if ($result->num_rows > 0) {
		
		/** Initialize arrays */
		$name_array = array();
		$tip_array = array();
		$date_array = array();
				
		$num_rows = $result->num_rows;
		
		/** Loops through results */
		for ($i = 0; $i < $num_rows; $i++) {
			
			/** Put data into corresponding array */
			array_push($name_array, $row["first_name"] . " " . $row["last_name"]);
			array_push($tip_array, $row["tip"]);
			array_push($date_array, $row["date"]);
			
		}
		
	}
	
	?>
	
</body>
</html>