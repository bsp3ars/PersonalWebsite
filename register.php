<!DOCTYPE html>
<html>
<head>
<title>Register</title>
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
	media="screen" href="css/styleSheet.css" />
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
			require ('connection.php');
			?>
			<article>
			<?php
			if (isset ( $_POST ['email'] )) {
				$fName = htmlspecialchars ( $_POST ['fName'] );
				$lName = htmlspecialchars ( $_POST ['lName'] );
				$username = htmlspecialchars ( $_POST ['username'] );
				$password = htmlspecialchars ( $_POST ['password'] );
				$password = md5 ( $password );
				$password2 = htmlspecialchars ( $_POST ['password2'] );
				$password2 = md5 ( $password2 );
				$email = htmlspecialchars ( $_POST ['email'] );
				
				$doubleQUERY = 'SELECT COUNT(*) FROM users WHERE username = ? or email = ?';
				$check = $dConnect->prepare ( $doubleQUERY );
				$check->bind_param ( 'ss', $username, $password);
				$check->execute();
				$check->bind_result($total);
				$check->fetch();
				$check->close();
								
				if ($total > 0) {
					echo "<p>There is already a user with that information</p>";
					require ("registrationForm.php");
				} 

				else {
					if (! (strcmp ( $_POST ['password'], $_POST ['password2'] ) == 0)) {
						echo "<p>ERROR:Passwords do not match</p>";
						require ("registrationForm.php");
					} else {
						$status = 'user';
						$query = 'INSERT INTO users (fName, lName, username, password, email, status) VALUES (?, ?, ?, ?, ?, ?)';
						$insertCheck = $dConnect->prepare ( $query );
						$insertCheck->bind_param ( 'ssssss', $fName, $lName, $username, $password, $email, $status );
						
						
						if ($insertCheck = $insertCheck->execute ()) {
							header ( "Refresh: 3; url=login.php" );
							echo "<p>Your login was added, congratulations!  You will now be redirected to the login page.";
						} else {
							echo "Failed to insert the record: " . mysqli_connect_error ();
						} // INSERTS THE RECORD BECAUSE EMAIL NOT DUPLICATED
					} // ENDS PASWORDS NOT MATCHING
				} // ENDS THE ELSE FOR SCREEN ID CHECK
			} else {
				require ("registrationForm.php");
			}
			?>
		</article>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>