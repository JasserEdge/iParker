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
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li><strong><p>ADMIN</p></strong></li>	
					<li><a href="index.php">Log out</a></li>					
					<li><a href="">Contact us</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container">
					<table border='1'>
						<tr>
							<th>ID</th>
							<th>License Plate</th>
							<th>Vehicle Type</th>
							<th>School Occupation</th>
							<th>Parking Spot</th>
							<th>Time-in</th>
							<th>Time-out</th>
							<th>Date</th>
						</tr>
						
						<?php
							//get data
							//get all information from  table
							$query="SELECT * from vehicles";
							//run the query and store data in a variable
							$data = @mysqli_query($conn, $query);
							//display data
							if($data) {
								while($row = @mysqli_fetch_array($data)){ ?>
									<tr><td><?php echo $row['parking_id'];?></td>
									   <td> <?php echo $row['license_plate'];?></td>
									   <td> <?php echo $row['vehicle_type'];?></td>
									   <td> <?php echo $row['school_occupation'];?></td>
									   <td> <?php echo $row['parking_spot'];?></td>
									   <td> <?php echo $row['time_in'];?></td>
									   <td> <?php echo $row['time_out'];?></td>
									   <td> <?php echo $row['date'];?></td>
									</tr>
								<?php }
							}
							mysqli_close($conn); //close connection
						?>
					</table>			
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