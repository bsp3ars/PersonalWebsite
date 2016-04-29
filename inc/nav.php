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
			href="bpa.php" title="BPA">BPA</a>  <a href="forum.php" title="Forum">Forum</a>
	</div>
	<ul class="fullNav">
		<div class="mobileButton" onclick="openNav()">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
		<?php
		if (isset ( $_SESSION ['status'] ) && $_SESSION ['status'] == 'loggedin') {
			echo '<li class="dropdownAccount"><a href="#"title="My Account">' . $_SESSION ['fName'] . ' ' . $_SESSION ['lName'] . '</a>
			<div class="dropdownAccountContent">
				<a href="#" title="My Account">My Account</a>
				<a href="inc/logout.php" title="Log Out">Log Out</a>';
				if ( $_SESSION ['level'] == 'admin')	{
					echo '<a href="approvalpage.php" title="Approval Page">Approval Page</a>
						<a href="allusers.php" title="Display Users">Display Users</a>';
				}
			echo'</div></li>';
		} else {
			echo '<li class = "floatRight"><a href="login.php" title="Log In">Log In</a></li>
				<li class = "floatRight"><a href="register.php" title="Register">Register</a></li>';
		}
		?>
		
		<li class="dropdownRight"><a href="#" title="Links">Links</a>
			<div class="dropdownContent">
				<a href="http://gw.mvctc.com/web/jportfolio.html" title="GW"
					target="_blank">GW</a> <a href="https://github.com/bsp3ars"
					title="GitHub" target="_blank">GitHub</a>
			</div></li>
	</ul>

</nav>