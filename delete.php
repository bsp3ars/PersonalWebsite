<?php
require ('connection.php');

$query = 'DROP TABLE users'; //holds sql

if ($dConnect->query($query))	{
	echo '<h2>Users table dropped successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>