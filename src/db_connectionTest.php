 <?php
	function connect() {
		$servername = "localhost";
		$username = "root";
		$password = "root";
		
		try {
			$conn = new PDO ( "mysql:host=$servername;dbname=summer2017Website", $username, $password );
			// set the PDO error mode to exception
			$conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			echo "Connected succesfully";
			$sql = "CREATE DATABASE myDBPDO";
			// use exec() because no results are returned
			$conn->exec ( $sql );
			echo "Database created successfully<br>";
		} catch ( PDOException $e ) {
			echo $sql . "<br>" . $e->getMessage ();
		}
		
		return $conn;
	}
	function closeConnection($conn) {
		$conn = null;
	}
	?> 
