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
	
	//get data
	//get all information from  table
	$query="SELECT * from vehicles";
	//run the query and store data in a variable
	$data = @mysqli_query($conn, $query);
	//display data
?>

<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
		<link rel="stylesheet" href="assets/css/button.css" />
		
	
	</head>
	<body class="landing">
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			<nav id="nav">
				<ul>
					<li><strong><p class="text-white">ADMIN</p></strong></li>	
					<li><a href="index.php">Log out</a></li>					
					<li><a href="options.php">Options</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container">
					<table style="color:white" border='1'>
						<tr>
							<th><h4 style="color:white">ID</h4></th>
							<th><h4 style="color:white">License Plate</h4></th>
							<th><h4 style="color:white">Vehicle Type</h4></th>
							<th><h4 style="color:white">School Occupation</h4></th>
							<th><h4 style="color:white">Parking Spot</h4></th>
							<th><h4 style="color:white">Time-in</h4></th>
							<th><h4 style="color:white">Time-out</h4></th>
							<th><h4 style="color:white">Date</h4></th>
							<th></th>
							<th></th>
						</tr>
						<?php
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
									   <td><a href="" class="button buttoncolor edit small icon">Edit</a></td>
									   <td><a href="" class="button buttoncolor delete small icon">Delete</a></td>
									</tr>
								<?php }
							}
							mysqli_close($conn); //close connection
						?>
					</table>
					<div class="feature-grid">
						<div class="feature">
							<p>Number of Available Slots:<p style="color:red">000</p>
							<p>Number of Student vehicles:<p style="color:red">000</p>
						</div>
						<div class="feature">
							<p>Number of Employee vehicles:<p style="color:red">000</p>
							<p>Number of Visitor vehicles:<p style="color:red">000</p>
						</div>	
					</div>
					<a href="addvehicle.php" class="button special">Add a Vehicle</a>
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