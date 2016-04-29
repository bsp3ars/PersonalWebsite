<?php
require ('connection.php');

$query = 'CREATE TABLE posts	(
postID int NOT NULL AUTO_INCREMENT,
userID int,
title blob,
textfield blob,
approval char,
time timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (postID)
)'; //holds sql

if ($dConnect->query($query))	{
	echo '<h2>Users table created successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>