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
		<link rel="stylesheet" href="assets/css/modal.css" />
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
			$_SESSION['idnumber'] = 0;
		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li><strong><p class="text-white">ADMIN</p></strong></li>
					<li><a href="index.php">Log out</a></li>					
					<li><a href="contactus.php">Contact us</a></li>
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
									<button id="myBtn" class="button special">Add an Identity Card</button>
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

			<!--Modal-->
			<div id="myModal" class="modal">
					<div class="modal-content ">
							<div class="modal-body containersmall align-center">
								<span class="close">&times;</span>
								<header class="align-center">
									<h2 style="color:black">Add Student ID to School System:</h2>
								</header>
								<form class="form" action="checkid.php" method="post">
									<input type="text" name="idnumber" placeholder= "201201022" required="required" autocomplete="off" style="color:black" /></br>
									<p><input class="button special" type='submit' value='Log Student ID'/><p>
								</form>
							</div>	
					</div>
			</div>
			
			</section>
		<!-- Footer -->
			<footer id="footer">
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

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			<script>
				// Get the modal
				var modal = document.getElementById("myModal");

				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks the button, open the modal 
				btn.onclick = function() {
					modal.style.display = "block";
				}

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
					modal.style.display = "none";
				}

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>

	</body>
</html>