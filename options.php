<?php
session_start();
$_SESSION['idnumber'] = 0;
?> 
<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
	</head>
	<body class="landing">
		<?php
			if ($_SESSION['login'] == 2){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Successfully Logged in!</strong> 
						</div> ";
			}
			$_SESSION['login'] = 0;
		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li><strong><p class="text-white">ADMIN</p></strong></li>
					<li><a href="index.php">Log out</a></li>					
					<li><a href="">Contact us</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container">
					<header class="major special">
							<h2>iParker Management System<h2>
					</header>
					<div class="feature-grid">
						<div class="feature">
							<div class="image rounded">
								<img src="images/card.jpg" alt="no image" />
							</div>
							<div class="content">
								<header>
									<p> Choose to add a student ID to school system</p>
									<a href="addstudent.php" class="button special">Add an Identity Card</a>
								</header>
							</div>
						</div>
						<div class="feature">
							<div class="image rounded">
								<img src="images/park.jpg" alt="no image" />
							</div>	
							<div class="content">
								<header>
									<p> Choose to access parking management system</p>
									<a href="parkmanage.php" class="button special">Parking Management</a>
								</header>
							</div>
							
						</div>
					</div>
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