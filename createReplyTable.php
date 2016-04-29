<?php
require ('connection.php');

$query = 'CREATE TABLE reply	(
replyID int NOT NULL AUTO_INCREMENT,
userID int,
postID int,
textField blob,
approval char,
time timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (replyID)
)'; //holds sql

if ($dConnect->query($query))	{
	echo '<h2>Users table created successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>