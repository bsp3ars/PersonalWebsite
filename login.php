<!DOCTYPE html>
<html>
<head>
<title>Login/Register</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The Login/Register page for Brandon Spears, a web designer
		in the Game Programming and Web Applications Class at the Miami Valley Career Technology Center.">
<meta name="keywords"
	content="MVCTC, GW, Miami Valley CTC, Web Applications, Game Programming,
		Student Portfolio work of Brandon Spears">
<meta name="author" content="Brandon Spears">
<meta name="robots" content="index,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css"
	media="screen and (max-width: 720px)" href="css/mobileStyleSheet.css">
<link rel="stylesheet" type="text/css"
	media="screen and (min-width: 721px)" href="css/styleSheet.css" />
<link rel="stylesheet" href="css/printstyles.css" type="text/css"
	media="print" />

<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "75%";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>
</head>
<body>
	<div class="container">
			<?php
			include ("inc/nav.php");
			?>
			<article>
			<?php
			echo "
		<form method='POST' action ='login.php'>
			
		<h2> Register </h2>
		<table class='centerTable'>
		<tr><td>First Name: </td><td><input type='text' name='fName' maxlength='20' pattern='[a-zA-Z]{3,20}' required></td></tr>
		<tr><td>Last Name: </td><td><input type='text' name='lName' maxlength='20' pattern='[a-zA-Z]{3,20}' required></td></tr>
		<tr><td>Screen Name: </td><td><input type='text' name='screenID' maxlength='12' pattern='[a-zA-Z0-9]{1,20}' required></td></tr>
		<tr><td>Username: </td><td><input type='text' name='username' maxlength='20' pattern='[a-zA-Z0-9]{1,20}' required></td></tr>
		<tr><td>Password: </td><td><input type='password' name='password' maxlength='20' pattern='(?=.*\d).{4,8}' required></td></tr>
		<tr><td>Email: </td><td><input type='text' name='email' maxlength='20' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required></td></tr>
		<tr><td>Bio: </td><td><input type='text' name='bio' maxlength='125'></td></tr>
		</table>
		<p>
		<input type='submit' value='Submit'>
		<input type='reset' value='Reset'>
		</p>
		</form>";
			
			if (isset ( $_POST ['email'] )) {
				
				$fName = htmlspecialchars ( $_POST ['fName'] );
				$lName = htmlspecialchars ( $_POST ['lName'] );
				$screenID = htmlspecialchars ( $_POST ['screenID'] );
				$username = htmlspecialchars ( $_POST ['username'] );
				$password = htmlspecialchars ( $_POST ['password'] );
				$email = htmlspecialchars ( $_POST ['email'] );
				$bio = htmlspecialchars ( $_POST ['bio'] );
				
				echo "<h2> Register Data </h2>";
				echo "<p> First Name: " . $fName . "<br/>";
				echo "Last Name: " . $lName . "<br/>";
				echo "Screen Name: " . $screenID . "<br/>";
				echo "Username: " . $username . "<br/>";
				echo "Password: " . $password . "<br/>";
				echo "Email: " . $email . "<br/>";
				echo "Bio: " . $bio . "<br/></p>";
			}
			
			?>
			
			<?php
			echo "
		<form method='POST' action ='login.php'>
		
		<h2> Login </h2>
		<table class='centerTable'>
		<tr><td>Username: </td><td><input type='text' name='lUsername' maxlength='20' pattern='[a-zA-Z0-9]{1,20}' required></td></tr>
		<tr><td>Password: </td><td><input type='password' name='lPassword' maxlength='20' pattern='(?=.*\d).{4,8}' required></td></tr>
		</table>
		<p>
		<input type='submit' value='Submit'>
		<input type='reset' value='Reset'>
		</p>
		</form>";
			
			if (isset ( $_POST ['lPassword'] )) {
				
				$lUsername = htmlspecialchars ( $_POST ['lUsername'] );
				$lPassword = htmlspecialchars ( $_POST ['lPassword'] );
				
				echo "<h2> Login Data </h2>";
				echo "<p>Username: " . $lUsername . "<br/>";
				echo "Password: " . $lPassword . "<br/></p>";
			}
			
			?>
		
		
		
		
		</article>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>