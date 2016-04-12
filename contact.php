<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The Contact page for Brandon Spears, a web designer
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
			<h2>ERROR</h2>
			<p>I am sorry but the current page is still being worked on. Please
				come back at a later time and it might be here (no promises).</p>
		</article>
		<div class="wrapimage">
			<img src="photos/gears.gif" class="scaleimage" alt="gears gif">
		</div>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>