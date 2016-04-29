<?php
require ("session_start.php");

session_unset($_SESSION['fName'],$_SESSION['lName'], $_SESSION['userID'], $_SESSION['status']);

session_destroy();


header ( "Refresh: 1; url=../index.php");

echo "Logged Out";

?>