<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databasename = "localdb";
	$conn = new mysqli($hostname,$username,$password,$databasename);
    
    // Check connection
/*if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";*/
	?>
