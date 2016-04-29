<!DOCTYPE html>
<html>
<head>
<title>Forum</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The Forum page for Brandon Spears, a web designer
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
			require ('inc/nav.php');
			require ('connection.php');
			?>
			<article>
			<h2>Discussion Forum</h2>
			<?php
			
			if (isset ( $_SESSION ['userID'] )) {
				
				$sql = 'SELECT postID, userID, title, textfield, date_format(time, "%m/%d/%Y at %l:%i %p") FROM posts WHERE approval = "Y" ORDER BY postID ASC LIMIT 25';
				
				if($result = $dConnect->query($sql))	{
					while($row = $result->fetch_assoc())	{
						echo "<div class='initialpost'>
						<h2> ".$row['title']."</h2>
						<p>".$row['textfield']." <br>
						<a class= 'reply' href='reply.php?postID=".$row['postID']."' title='Reply'>Reply</a></p>
						<h6>Posted On: ".$row['date_format(time, "%m/%d/%Y at %l:%i %p")']." <br>
						Post By:";
						$userID = $row['userID'];
						$userSQL = 'SELECT * FROM users WHERE userID = "'.$userID.'"';
						$userresult = $dConnect->query($userSQL);
						$userrow = $userresult->fetch_assoc();
						echo " ".$userrow['fName']." ".$userrow['lName'] ."
								</h6></div>";
					}
				}
				
				
				if (isset ( $_POST ['content'] )) {
					
					$approval = "N";
					
					$thread = htmlspecialchars ( $_POST ['thread'] );
					$content = htmlspecialchars ( $_POST ['content'] );
					
					$query = 'INSERT INTO posts (userID, title, textfield, approval) VALUES (?, ?, ?, ?)';
					$insertCheck = $dConnect->prepare ( $query );
					$insertCheck->bind_param ( 'isss', $_SESSION ['userID'], $thread, $content, $approval );
					
					if ($insertCheck = $insertCheck->execute ()) {
						header ( "Refresh: 2; url=forum.php" );
						echo "<p>Your thread was added, congratulations!  It must be verified before it can be viewed.";
					} else {
						echo "Failed to insert the thread. ERROR: " . mysqli_connect_error ();
						require ('dbForm.php');
					}
				} else {
					require ('dbForm.php');
				}
			} else {
				echo "<p>Please log in to post to the discussion board</p>";
			}
			
			?>
		</article>
		<?php
		require ("inc/footer.php");
		?>
		</div>
</body>
</html>