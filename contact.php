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
			require ("inc/nav.php");
			?>
			<article>
			<h2>Contact</h2>
			<p>You can contact me at my email (listed in the footer), or through my teacher <a href="mailto:mgoodall@mvctc.com"
			class="mailLink" title="Teacher Email">Mrs. Melissa Goodall</a>.</p>
		</article>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>