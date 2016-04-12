<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The home page for Brandon Spears, a web designer in the Game Programming
		and Web Applications Class at the Miami Valley Career Technology Center.">
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

<script
	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAbh0et1DTsukm-vitn1lCD7kiMGXgubJo"></script>

<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "75%";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}

			var map;
			//<-- This is now available to both event listeners and the initialize() function
			function initialize() {
				var mapOptions = {
					center : new google.maps.LatLng(39.845507, -84.328824),
					zoom : 16,
					mapTypeId : google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
			}


			google.maps.event.addDomListener(window, 'load', initialize);
			google.maps.event.addDomListener(window, "resize", function() {
				var center = map.getCenter();
				google.maps.event.trigger(map, "resize");
				map.setCenter(center);
				// FOUND AT http://stackoverflow.com/questions/18444161/google-maps-responsive-resize
			});
		</script>
</head>
<body>
	<div class="container">
			<?php
			require ("inc/nav.php");
			?>
			<article>
			<h2>Welcome</h2>
			<p>This website is a very unique place that has some of my projects
				that I have created. Despite all of the issues that I have
				encountered, I will continue on my path toward greatness. On this
				website you can find all of the projects and other activities that I
				have been involved in, as well as some of my awards and
				accomplishments that I have recieved.</p>
		</article>
		<article>
			<h2>Educational Goals</h2>
			<p>To develop two SMART (specific, measurable, achievable,
				results-focused, and time-bound) goals, you have to be able to
				determine what it is that you want for a goal. My first goal that I
				want to achieve is to practice my HTML skills by continuously
				improving my site at least once every two months (or six times a
				year). The second SMART goal is to be about my personal work ethic.
				I am going to spend at least an hour a week studying and reviewing
				my previous courses and information that I have covered.</p>
		</article>
		<article>
			<h2>Employment Goals</h2>
			<p>Two SMART (specific, measurable, achievable, results-focused, and
				time-bound) employment goals that I have for after college is to
				accomplish 30 hours of community service by the end of my senior
				year. The second goal is to continue obtaining college credits, by
				earning atleast 10 college credits a year. While both may sound
				rather daunting, I am already earning college credits by taking
				dual-credit classes at the Miami Valley Career Technology Center
				(MVCTC), as well as outside of high school at Sinclair Community
				College.</p>
		</article>

		<article>
			<h2>Image Map</h2>
			<div class="wrapimage">
				<a href="imagemap.php"> <img src="photos/sstreet.jpg"
					alt="Sesame Street" class="scaleimage"></a>
			</div>
			<p>The image above is a link to an image map that allows for you to
				click on parts of itself and have it link to other websites for you.
			</p>
		</article>
		<article>
			<h2 class="apiInfo">Google Map</h2>
			<div id="googleMap"></div>
			<p class="apiInfo">This API (Application Programming Interface) uses
				google maps to show the location of my current school.</p>
		</article>
		
		<?php
		include ("inc/footer.php");
		?>
		</div>
</body>
</html>