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
			require ("inc/nav.php");
			?>
			<article>
			<h2>Discussion Forum</h2>
			<?php
			
			echo "
		<form method='POST' action ='forum.php'>
		<table class='centerTable'>
		<tr><td>Title: </td><td><input type='text' name='title' maxlength='35' required></td></tr>
		<tr><td>Text Field: </td><td><input type='text' name='textField' maxlength='500' required></td></tr>
		</table>
		<p>
		<input type='submit' value='Post'>
		<input type='reset' value='Reset'>
		</p>
		</form>";
			
			if (isset ( $_POST ['textField'] )) {
				
				$title = htmlspecialchars ( $_POST ['title'] );
				$textField = htmlspecialchars ( $_POST ['textField'] );
				
				echo "<h2> Posts </h2>";
				echo "<p> Title: " . $title . "<br>";
				echo "Text: " . $textField . "<br>";
				echo "<a href='reply.php' title='Reply'>Reply</a>";
			}
			
			?>
		</article>
		<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>