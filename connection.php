<?php

function Connect()
{
	//$dbhost = "sql213.main-hosting.eu";
	$dbhost = "31.170.160.154";
	$dbuser = "u721872466_carrentaladmin";
	$dbpass = "lAv3ODqUm0|lAv3ODqUm0|";
	$dbname = "u721872466_ichcarrental";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>