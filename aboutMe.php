<!DOCTYPE html>
<html>
<head>
<title>About Me</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The about me page for Brandon Spears, a web designer in the Game
		Programming and Web Applications Class at the Miami Valley Career Technology Center.">
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
			<img class="transition" src="photos/resized.png" alt="personal photo">
			<p>Hover or tap the image for a cool transformation.</p>
			<h2>About Me</h2>
			<p>My name is Brandon Spears, and I am currently 16 years old. I am
				currently a junior in the Game Programming and Web Applications
				class at Miami Valley Career Technology Center. I am also a student
				at Sinclair Community College, as well as Clark State Community
				College. My home school is Tipp City Exempted Village Schools, and
				one of my greatest hobbies is computers (and anything involving
				them). My other hobbies include swimming, basketball, and video
				games. I do my best to keep myself busy, with my job at Taco Bell,
				to the AP Classes at MVCTC, to the extracurricular college classes
				that I also take. I also like to go above and beyond what is
				necessary to improve my knowledge and understanding of everything
				important.</p>
		</article>
		<article>
			<h2>Family</h2>
			<p>My family consists of my father George Spears, my mother Lori
				Spears, my brother Jason Spears, and my dog Buddy, who is a
				black-lab mix. My father is a Director of Database Solutions at
				Oracle Corporation, one of the biggest computer companies in the
				world. My mother is a substitute teacher, as well as the assistant
				for Mrs. Evelyn Staub, the owner of Studio 14 in Tipp City. My
				brother is a middle school student at Tippecanoe Middle School.
				Buddy is about 4 and a half years old now, and was adopted from a
				local animal shelter.</p>
		</article>
		<article>
			<h2>Achievements</h2>
			<p>I won Student of the Month (February 2016), as well as placed 4th
				Regionaly for C++ (BPA). I am also proud of my honor attendence at
				MVCTC, and the amount of time I have spent on this website (over 30
				hours). I also am currently in the most advenced classes possible:
				Calculus (Dual Credit), Physics, English 4 (Dual Credit), Web
				Applications, and multiple classes at Sinclair Community College.</p>
		</article>

		<div class="wrapimage">
			<img src="photos/wordle.png" class="scaleimage" alt="wordle">
		</div>
		<p>This wordle (word cloud) roughly describes some of the
			characteristics of myself, some of the different things that I am
			going to learn, and looks very professional for this project.</p>
		<p>
		
		
		<div class="wrapimage">
			<video id="About Me Video" class="scaleimage" height="720" controls>
				<source src="videos/aboutme.mp4" type="video/mp4">
			</video>
		</div>
		</p>
			<?php
			require ("inc/footer.php");
			?>
		</div>
</body>
</html>