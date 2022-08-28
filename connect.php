<?php

	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$dbname = "anish";

	$conn = mysqli_connect($host,$user,$pass,$dbname);

	if(mysqli_connect_error()){
		echo "connect to database failed";
	}

?>