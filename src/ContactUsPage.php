<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="title icon" href="images/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="contactus.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
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
					<li><a href="#">Home</a></li>
					<li><a href="#">Find My School</a></li>
					<li><a href="#">General Tips</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li class="active"><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
							Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- End Navbar -->

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
				<h1>Contact Us</h1>
				<div class="middle-left-info">
					<form class="contact-form" action="contactus.php" method="post">
						<!-- First Name -->
						<div class="form-group">
							<label>Your Name</label> <input type="text" class="form-control"
								id="full-name" placeholder="Enter your name" name="full-name">
						</div>
						<!-- Email -->
						<div class="form-group">
							<label>Email</label> <input type="text" class="form-control"
								id="email" placeholder="Enter your email" name="email">
						</div>
						<!-- Password -->
						<div class="form-group">
							<label>Comment</label> <input type="text" class="form-control"
								id="comment" placeholder="Type comment here" name="comment">
						</div>
						<button type="submit" value="submit"
							class="btn btn-default submit-button">Submit</button>
					</form>
				</div>
				<div class="middle-right-info">
					<h3 id="contact-info-title">Contact Info</h3>
					<br>
					<div>
						<h5 class="contact-info">Email</h5>
						<h5 class="contact-info">contactus@studenttips.com</h5>
					</div>
					<br>
					<div>
						<h5 class="contact-info">Phone Number</h5>
						<h5 class="contact-info">(630) 123-4567</h5>
					</div>
					<br>
					<div>
						<h5 class="contact-info">Brogrammers Inc.</h5>
						<h5 class="contact-info">Lisle, Illinois</h5>
					</div>
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

</body>
</html>