<?php
require ("inc/session_start.php");
?>
<!-- Brandon Spears, 4/12/16, Version 2.0-->
<span id="wrapimage"> <a href="index.php" title="Home"><img
		src="photos/gLogo.png" class="scaleimage" alt="logo"></a>
</span>
<hr />
<nav>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php" title="Home">Home</a> <a href="aboutMe.php"
			title="About Me">About Me</a> <a href="contact.php" title="Contact">Contact</a>
		<a href="projectPage.php" title="Main Projects">Main Projects</a> <a
			href="c++proj.php" title="C++ Projects">C++ Projects</a> <a
			href="java.php" title="Java Projects">Java Projects</a> <a
			href="bpa.php" title="BPA">BPA</a> <a href="badges.php"
			title="Badges">Badges</a> <a href="forum.php" title="Forum">Forum</a>
			<a href="login.php" title="Log In">Log In</a>
	</div>
	<ul class="fullNav">
		<li><a href="index.php" title="Home">Home</a></li>
		<li><a href="aboutMe.php" title="About Me">About Me</a></li>
		<li><a href="contact.php" title="Contact">Contact</a></li>

		<li class="dropdown"><a href="projectPage.php" title="Projects">Projects</a>
			<div class="dropdownContent">
				<a href="projectPage.php" title="Main Projects">Main Projects</a> <a
					href="c++proj.php" title="C++ Projects">C++ Projects</a> <a
					href="java.php" title="Java Projects">Java Projects</a>
			</div>
		
		<li><a href="bpa.php" title="BPA">BPA</a></li>
		<li><a href="badges.php" title="Badges">Badges</a></li>
		<li><a href="forum.php" title="Forum">Forum</a></li>
		<li><a href="login.php" title="Log In/Register">Log In/Register</a></li>
		<li class="dropdownRight"><a href="#" title="Links">Links</a>
			<div class="dropdownContent">
				<a href="http://gw.mvctc.com/web/jportfolio.html" title="GW"
					target="_blank">GW</a> <a href="https://github.com/bsp3ars"
					title="GitHub" target="_blank">GitHub</a>
			</div></li>
	</ul>
	<div class="mobileButton" onclick="openNav()">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
</nav>