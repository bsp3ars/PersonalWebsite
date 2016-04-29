<?php
require ('connection.php');
$password = md5('bpspears95');
$query = 'INSERT INTO users 
		(fName, lName, username, password, email, status) 
		VALUES ("Brandon", "Spears", "tippcityboy", "'.$password.'" , "bsp3ars@gmail.com", "admin")'; 
				
if ($dConnect->query($query))	{
	echo '<h2>Users table created successfully</h2>';
}
else echo '<h2>Error: '.$dConnect ->error. '</h2>';
$dConnect -> close();
?>

