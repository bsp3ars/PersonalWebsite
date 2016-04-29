<?php

$username = "root";
$password = "tc78wu03";
$database = "bspears";

$dConnect = new mysqli("localhost", $username, $password, $database);
if ($dConnect->connect_errno)	{
	echo "Failed to connect to Database: (" . $dConnect->connect_errno . ") ". $dConnect->connect_error;
}

//$dConnect->close();
?>