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