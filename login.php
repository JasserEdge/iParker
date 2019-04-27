<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "softeng-iparker-db";
	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if(!$conn){
		die("Connection Failed:" . mysqli_connect_error());
	}
	//get data from form
	$email = $_GET['email'];
	$password = $_GET['password'];
	//make sql insert statement
	$sql="SELECT * FROM accounts WHERE email='$email' AND password='$password'";
	//check if SQL is correctly formed
									
	$query = mysqli_query($conn, $sql); 
?>

<html>
	<head>
		<title>iParker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="">About us</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="center">
					
						<div class>
							<div class="box">
								<div class="content">
									
									<footer class="align-center">
										<?php
										if(mysqli_num_rows($query) > 0){
											echo "<h2>Logged in successfully!!</h2>";
											echo "<br><a href='option.html' class='button alt'>Continue to iParker Management</a>";
										} else{
											mysqli_error($conn);
											echo "<h2>Invalid account!!</h2>";
											echo "<br><a href='index.html' class='button alt'>Please Relog-in</a>";
										}
										mysqli_close($conn);
										?>
									</footer>
								</div>
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