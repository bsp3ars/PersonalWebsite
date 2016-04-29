<?php
require ("inc/session_start.php");
require ('connection.php');
if (isset ( $_SESSION ['status'] )) {
	if ($_SESSION ['level'] === "admin") {
		echo "	<h2> Users</h2>";
		$sql = 'SELECT * FROM users';
		
		if ($result = $dConnect->query ( $sql )) {
			echo "<table border='1'>";
			while ( $row = $result->fetch_assoc () ) {
				echo "<tr><td>" . $row ['userID'] . "</td><td>" . $row ['fName'] . "</td><td>" . $row ['lName'] . "</td><td>" . $row ['username'] . "</td><td>" . $row ['password'] . "</td><td>" . $row ['email'] . "</td><td>" . $row ['status'] . "</td> 	
					 </tr>";
			}
			echo "</table>";
		}
	} else {
		echo "You are not an admin, you are a ";
		echo $_SESSION ['level'];
	}
}else	{
	echo "You must log in first.";
}
?>