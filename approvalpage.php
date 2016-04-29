<!DOCTYPE html>
<html>
<head>
<title>Approval Page</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The approval page for Brandon Spears, a web designer in the Game Programming
		and Web Applications Class at the Miami Valley Career Technology Center.">
<meta name="keywords"
	content="MVCTC, GW, Miami Valley CTC, Web Applications, Game Programming,
		Student Portfolio work of Brandon Spears">
<meta name="author" content="Brandon Spears">
<meta name="robots" content="index,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen"
	href="css/styleSheet.css" />
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
			require ("inc/nav.php");
			require ('connection.php');
			?>
			<article>
			<?php
			
			if (($_SESSION ['level'] == 'admin' )) {
				
				if (isset($_POST ['postID']) && isset($_POST ['allowed']))	{
					
					$sql = 'UPDATE posts SET approval = "'.$_POST ['allowed'].'" WHERE postID = "'.$_POST ['postID'].'"';
					$dConnect->query($sql);
					echo "Value Changed";
					header ( "Refresh: 1; url=approvalpage.php" );
					
				}
				
				$sql = 'SELECT postID, userID, title, textfield, date_format(time, "%m/%d/%Y at %l:%i %p"), approval FROM posts ORDER BY postID ASC LIMIT 25';
				
				if ($result = $dConnect->query ( $sql )) {
					while ( $row = $result->fetch_assoc () ) {
						echo "<div class='initialpost'>
						<h2> " . $row ['title'] . "</h2>
						<p>" . $row ['textfield'] . " <br>
						<a class= 'reply' href='replyapprovalpage.php?postID=" . $row ['postID'] . "' title='Reply'>Reply</a></p>
						<h6>Posted On: " . $row ['date_format(time, "%m/%d/%Y at %l:%i %p")'] . " <br>
						Post By:";
						$userID = $row ['userID'];
						$userSQL = 'SELECT * FROM users WHERE userID = "' . $userID . '"';
						$userresult = $dConnect->query ( $userSQL );
						$userrow = $userresult->fetch_assoc ();
						echo " " . $userrow ['fName'] . " " . $userrow ['lName'] . " " . $row['approval']. "
								</h6></div>";
						
						echo "<form method='POST' action ='approvalpage.php' autocomplete='off'>

					<div class= 'post'>
					<input type='hidden' name='postID' value = '" . $row ['postID'] . "'>
					<input type='hidden' name='allowed' value = 'Y'>			
					<input type='submit' value='Submit'>
					</div>
					</form>";
					}
				}
			}else	{
			echo "<h2>You are not an admin, and aren't allowed here</h2>";
			}
			?>
		</article>
		
		<?php
		include ("inc/footer.php");
		?>
		</div>
</body>
</html>