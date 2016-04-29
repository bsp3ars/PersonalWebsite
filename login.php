<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The Login page for Brandon Spears, a web designer
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
			if (isset ( $_POST ['password'] )) {
				$username = htmlspecialchars ( $_POST ['username'] );
				$password = htmlspecialchars ( $_POST ['password'] );
				$password = md5 ( $password );
				
				$sql ='SELECT COUNT(userID) FROM users WHERE username = ? and password = ?';
				$userCHECK = $dConnect->prepare($sql);
				$userCHECK->bind_param('ss', $username, $password);
				$userCHECK->execute();
				$userCHECK->store_result();
				$userCHECK->bind_result($usercount);
				$userCHECK->fetch();
				
				if ($usercount == 1 )	{
				$sql = 'SELECT userID, fName, lName, status FROM users WHERE username = ? and password = ?';
				if (!($query = $dConnect->prepare ( $sql ))) {
					printf("Error: %s.\n", $dConnect->error);
				}
				else {					
					if (!$query->bind_param ( 'ss', $username, $password )) {
						echo 'Bind failed: '. $query->error;
					}
					else {
						if(!($result=$query->execute ()))	{
							echo 'Execution failed: '. $query->error;
						}
						else{
							$query->bind_result($userID,$fname2, $lname2, $status);
							  /* fetch value */
						    $query->fetch();
										
						$_SESSION ['userID'] = $userID;
						$_SESSION ['fName'] = $fname2;
						$_SESSION ['lName'] = $lname2;
						$_SESSION ['status'] = 'loggedin';
						$_SESSION ['level'] = $status;
						
						 header ( "Refresh: 3; url=index.php" );
						
						 echo "<p>Logged In</p>";
						 
						} 
					}
				}
				}else {
					echo "<p>Bad Login</p>";
					require ("loginForm.php");
				}
				} 
						
										
			else {
				require ("loginForm.php");
			}
			?>
		</article>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>
