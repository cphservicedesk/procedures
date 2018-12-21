<?php
	$servername = "localhost";
	$username = "NIGRUN";
	$password = "NIGRUN";
	$dbname = "NIGRUN";

	$connection = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($connection, "utf8");

    if(mysqli_connect_errno()){
        die("connection failed: ".mysqli_connect_error()." (" . mysqli_connect_error().")");
    }

?>