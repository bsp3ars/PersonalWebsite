<?php
require ('connection.php');

$query = 'CREATE TABLE users	(
userID int NOT NULL AUTO_INCREMENT,
fName varchar(20),
lName varchar(20),
username varchar(20),
password varchar(32),
email varchar(32),
status varchar(6),
ban char,
ban_duration int,
PRIMARY KEY (userID)
)'; //holds sql

if ($dConnect->query($query))	{
	echo '<h2>Users table created successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>