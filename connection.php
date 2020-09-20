<?php

	$hostname = "127.0.0.1:49691";
	$username = "azure";
	$password = "6#vWHD_$";
	$databasename = "localdb";
	$conn = new mysqli($hostname,$username,$password,$databasename);
    
    // Check connection
/*if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";*/
	?>