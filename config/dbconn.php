<?php

session_start();

// for database connection
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "logsheet";
//creating a connection
$conn = mysqli_connect($host,$db_user,$db_pass,$db_name);

		$room = '';
		$firstname = '';
		$lastname = '';
		$mobile = '';
		$checkedin = '';

?>