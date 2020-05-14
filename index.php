<?php
session_start();
$_SESSION['idnumber'] = 0;

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
	
//get data
//get all information from  table
	
$query="SELECT * from vehicles";
//run the query and store data in a variable
$data = @mysqli_query($conn, $query);

$numOfSlots = 76 - mysqli_num_rows($data);
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
			if ($_SESSION['login'] == 1){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Invalid Login!</strong> Email or password might be incorrect. Please try again.
						</div> ";
			}
			$_SESSION['login'] = 0;

			
		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li><a href="contactus.php">Contact us</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner">
				<div class="feature-grid">
					<div class="feature">
						<div class="align-center">
							<h2>NUMBER OF AVAILABLE PARKING SLOTS:<p style="color:red"><?php echo $numOfSlots?></p></h2>
							<a href="parkingspots.php" class="button special">View parking spots layout</a>
						</div>
					</div>
					<div class="feature">
						<div class="containersmall box center">
							<header class="align-center">
								<h2>Log In to iParker:</h2>
							</header>
							<footer class="align-center">
								<form class=" form" action="login.php" method="post">
									<input type="email" name="email" required="required" placeholder="Email" autocomplete="off"/></br>
									<input type="password" name="password" required="required" placeholder="Password" autocomplete="off"/></br>
									<p><input class="button special" type='submit' value='Login'/><p>
								</form>
							</footer>			
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

	</body>
</html>