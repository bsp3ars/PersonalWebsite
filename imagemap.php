<!DOCTYPE html>
<html>
	<head>
		<title>HTML Example</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../photos/smalllogo.png" type = "image/png">
		<meta name="description" content="An example page for Brandon Spears, a web designer in the Game Programming
		and Web Applications Class at the Miami Valley Career Technology Center.">
		<meta name="keywords" content="MVCTC, GW, Miami Valley CTC, Web Applications, Game Programming,
		Student Portfolio work of Brandon Spears">
		<meta name="author" content="Brandon Spears">
		<meta name="robots" content="index,follow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 720px)" href="css/mobileStyleSheet.css">
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 721px)" href="css/styleSheet.css"/>

		<script>
			window.alert("This page is not optimized for mobile devices. It may not display correctly on your device.");
			function openNav() {
				document.getElementById("mySidenav").style.width = "75%";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>
	</head>
	<body >
		<div class="container">
			<?php
			require("inc/nav.php");
			?>

			<article>
				<h2>Image Map</h2>
				<img src="photos/sstreet.jpg" usemap="#in76068" width="800" height="490" alt="click map"/>
				<map id="in76068" name="in76068">

					<area shape="rect" alt="Sesame Street" title="Sesame Street" coords="14,36,452,452"
					href="http://www.sesamestreet.org/" target="_blank" />

					<area shape="rect" alt="Bernie Sanders" title="Bernie Sanders" coords="467,52,794,450"
					href="https://go.berniesanders.com/page/content/splash" target="_blank" />
					<area shape="default"/>
				</map>
			</article>
			<?php
			require("inc/footer.php");
			?>
		</div>
	</body>
</html>