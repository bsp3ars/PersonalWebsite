<!DOCTYPE html>
<html>
<head>
<title>Main Projects</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="photos/smalllogo.png" type="image/png">
<meta name="description"
	content="The main project page for Brandon Spears, a web designer in the Game
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
		<div id="pageleft">
			<article>
				<table border=1>
					<tr>
						<th>Projects</th>
						<th>Explanation</th>
					</tr>
					<tr>
						<td>Adventure Game</td>
						<td>The adventure game is a C++ game designed to make you go
							through a story line in order to complete it.It has many
							different options and is very unique compared to other Adventure
							Games made by my classmates.I chose it because it was a
							culmintaion of all of my learned material as a C++ Programmer at
							the time of completion, as well as the pinnacle of my first
							semester in the class. If I were to improve upon it, I would
							increase its length, as well as the topic would be more diverse.
						</td>
					</tr>
					<tr>
						<td>More to come in the future...</td>
						<td>So be patient please...</td>
					</tr>
				</table>
			</article>
		</div>

		<article>
			<div class="wrapimage">
				<div id="pageright">
					<h2>Adventure Game</h2>

					<img src="photos/ag.png" alt="Adventure Game image"
						class="scaleimage">

					<p>
						This is the image of the adventure game when you run it. It lasts
						about 5 minutes and is a good time consumer. If you would like to
						download it, then click <a href="projects/AGame.zip">here</a> to
						download it. After you download it, then you have to unzip it. If
						you need help unzipping it, then check <a
							href="http://windows.microsoft.com/en-us/windows-8/zip-unzip-files">
							this</a> link for a great tutorial on how to accomplish it.
					</p>
				</div>
			</div>
		</article>
		<div id="clear">
			<?php
			require ("inc/footer.php");
			?>
		</div>
	</div>
</body>
</html>