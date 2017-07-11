<?php

/** Creates connection to database and returns link */
function makeConnection() {
	
	define('DB_NAME', 'student_tips');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	
	/** Make connection */
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	/** If connection is not made, print error */
	if (!$link) {
		die('Could not connect: ' . mysqli_error($link));
	}
	
	/** Select the database */
	$db_selected = mysqli_select_db($link, DB_NAME);
	
	/** If db not selected, print error */
	if (!$db_selected) {
		die('Can\'t use ' . DB_NAME . ': ' . mysqli_error($link));
	}
	
	return $link;
}

function closeConnection($link) {
	
	mysqli_close($link);
}