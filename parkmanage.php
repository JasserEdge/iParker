<?php
	
	session_start();
	
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

	$numOfStudent = 0;
	$numOfVisitor = 0;
	$numOfFaculty = 0;

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
		<link rel="stylesheet" href="assets/css/button.css" />
		<!--Font Awesome Icons-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
	
	</head>
	<body class="landing">
		<?php 
			if ($_SESSION['vehicle'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Vehicle successfully added!</strong>
						</div> ";
			}
			if ($_SESSION['vehicle'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>ERROR!</strong> vehicle invalid!
						</div> ";
			}
			$_SESSION['vehicle'] = 0;

			if ($_SESSION['delete'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Vehicle successfully deleted!</strong>
						</div> ";
			}
			if ($_SESSION['delete'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>ERROR!</strong> vehicle not deleted!
						</div> ";
			}
			$_SESSION['delete'] = 0;

			if ($_SESSION['edit'] == 1){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>Vehicle successfully update!</strong>
						</div> ";
			}
			if ($_SESSION['edit'] == 2){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
						<strong>ERROR!</strong> vehicle not updated!
						</div> ";
			}
			$_SESSION['edit'] = 0;


		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="options.php">iParker iAcademy</a></strong></h1>
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
				<div class="text-right">
					
						<table style="color:white" border='2'>
							<tr>
								<th><h4 style="color:white">ID</h4></th>
								<th><h4 style="color:white">License Plate</h4></th>
								<th><h4 style="color:white">Vehicle Type</h4></th>
								<th><h4 style="color:white">School Occupation</h4></th>
								<th><h4 style="color:white">Parking Spot</h4></th>
								<th><h4 style="color:white">Time-in</h4></th>
								<th><h4 style="color:white">Time-out</h4></th>
								<th><h4 style="color:white">Date</h4></th>
								<th><a href="addvehicle.php" class="button special">Add a Vehicle</a></th>
								
							</tr>
						</table>
						<div style="color:white; height:400px; overflow:auto;">
						<table>
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
										<td><a href="editplus.php?id='<?php echo $row['parking_id'];?>'" class="button buttoncolor edit small icon "><i class="fa fa-edit" style="font-size:24px"></i></a>
										<a href="deletevehicle.php?id='<?php echo $row['parking_id'];?>'" class="button buttoncolor delete small icon " onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
										</tr>
									<?php 
										if($row['school_occupation'] == "FACULTY"){
											++$numOfFaculty;
										}
										if($row['school_occupation'] == "STUDENT"){
											++$numOfStudent;

										}
										if($row['school_occupation'] == "VISITOR"){
											++$numOfVisitor;
										}
										
									}
								}
								mysqli_close($conn); //close connection
							?>
						</table>
						</div>
					
				</div>
				<div class="feature-grid">
						<div class="feature">
							<p>Number of Available slots:<p style="color:white"><?php echo $numOfSlots?></p>
							<p>Number of Student vehicles:<p style="color:white"><?php echo $numOfStudent ?></p>
						</div>
						<div class="feature">
							<p>Number of Faculty vehicles:<p style="color:white"><?php echo $numOfFaculty ?></p>
							<p>Number of Visitor vehicles:<p style="color:white"><?php echo $numOfVisitor ?></p>
						</div>	
				</div>
				<a href="" class="button special">View Past Documentations</a>
				<a href="parkingspots.php" class="button special">View parking spots layout</a>
				
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; iParker. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>