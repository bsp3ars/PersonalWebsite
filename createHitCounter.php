<?php
require ('connection_example.php');

$query = 'create table hitcounter (hitCount INT NOT NULL AUTO_INCREMENT PRIMARY KEY) '; //holds sql

if ($dConnect->query($query))	{
	echo '<h2>Hit counter table created successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>