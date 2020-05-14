<?php 
session_start();

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
$time = date("g:i:a");
?>
</html>
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
		<?php
			
		?>
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
				    <footer class="align-center containersmall box center">
						<form class="form" action="addvehicledb.php" method="post">
							<p>*License Plate: <input type="text" name="licensePlate" required="required" value='<?php if ($_SESSION['yes'] == 1){
																																echo $_SESSION['checkplate'];
																															}?>' autocomplete="off"/></p></br>
							<p>*Vehicle Type: <select name="vehicleType" required="required"></p>
								<option disabled selected hidden>SELECT ONE</option>
                                <option value="CAR">CAR</option>
                                <option value="MOTORCYCLE">MOTORCYCLE</option>
                                <option value="SUV">SUV</option>
								<option value="TRUCK">TRUCK</option>
                            </select></br>
							<p>*School Occupation: <select name="schoolOccupation" required="required"></p>
								<option disabled selected hidden>SELECT ONE</option>
                                <option value="FACULTY">FACULTY</option>
                                <option value="STUDENT">STUDENT</option>
                                <option value="VISITOR">VISITOR</option>
                            </select></br>
							<p><input class="button special" type='submit' value='Add Vehicle'/><p>
						</form>
				    </footer>
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