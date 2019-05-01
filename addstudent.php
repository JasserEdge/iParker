<?php
session_start();

?> 
<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
	<style>


	</style>
	</head>
	<body class="landing">
		<?php
			if ($_SESSION['idnumber'] == 1){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Invalid Student ID!</strong> Student ID is not registered in system.
						</div> ";
			} 
			if ($_SESSION['idnumber'] == 2){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Successfully Logged Student into iAcademy System!</strong> 
						</div> ";
			}
		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="options.php">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li>ADMIN</li>
					<li><a href="index.php">Log out</a></li>	
					<li><a href="options.php">Options</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container box center">
						<header class="align-center">
							<h2>Add Student ID to School System:</h2>
						</header>
						<footer class=" containersmall align-center">
							<form class="form" action="checkid.php" method="post">
								<input type="text" name="idnumber" placeholder= "201201022" required="required" autocomplete="off"/></br>
								<p><input class="button special" type='submit' value='Log Student ID'/><p>
							</form>
						</footer>		
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; iParker. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>