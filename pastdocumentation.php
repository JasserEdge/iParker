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
						<table style="color:white;">
							<tr>
								<th><h4 style="color:white">PAST ID</h4></th>
								<th><h4 style="color:white">DATE</h4></th>
								<th><h4 style="color:white">Parking ID</h4></th>
								
							</tr>
							<?php
							/*	if($data) {
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
									}
								}*/
								mysqli_close($conn); //close connection
							?>
						</table>
						</div>
					
				</div>
				<button onclick="goBack()" class="button special">Go Back</button>
				
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
            <script> 
                function goBack() {
                    window.history.back();
                }
            </script>

	</body>
</html>