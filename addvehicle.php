<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="stylesheet" href="assets/css/alert.css"/>
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
                    <header class="align-center">
				        <h2>Add vehicle to iParker:</h2>
				    </header>
				    <footer class="align-center">
						<form class=" form" action="addvehicledb.php" method="post">
							<p>*License Plate: <input type="text" name="licensePlate" required="required" placeholder="License Plate" autocomplete="off"/></p></br>
							<p>*Vehicle Type: <select name="vehicleType" required="required"></p>
                                <option value="car">CAR</option>
                                <option value="motor">MOTORCYCLE</option>
                                <option value="suv">SUV</option>
								<option value="truck">TRUCK</option>
                            </select></br>
							<p>*School Occupation: <select name="vehicleType" required="required"></p>
                                <option value="faculty">FACULTY</option>
                                <option value="student">STUDENT</option>
                                <option value="visitor">VISITOR</option>
                            </select></br>
							<p>*Parking Spot: <input type="text" name="parkingSpot" required="required" placeholder="Parking Spot" autocomplete="off"/></p>
							<p>*Time in: <input type="time" name="timeIn" required="required" autocomplete="off"/></p>
							<p>Time out: <input type="time" name="timeOut" required="required"  autocomplete="off"/></p>
							<p>*Date: <input type="date" name="date" required="required" autocomplete="off"/></p>
								
							<p><input class="button special" type='submit' value='Add Vehicle'/><p>
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