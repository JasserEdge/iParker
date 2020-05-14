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
    
    if(isset($_GET['id'])){

        $id=$_GET['id'];
        $_SESSION['editID'] = $id;
        //get data
        //get all information from  table
        $query="SELECT * from vehicles WHERE parking_id=$id";
        //run the query and store data in a variable
        $data = @mysqli_query($conn, $query);
        //display data
    }
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
				        <h2>Update vehicle to iParker:</h2>
				    </header>
				    <footer class="align-center containersmall box center">
                    <?php 
                        $row = @mysqli_fetch_array($data) ?>
                            <form class="form" action="editvehicle.php?id='<?php echo $row['parking_id'];?>" method="post">
                                <p>*License Plate: <input type="text" name="licensePlate" required="required" value="<?php echo $row['license_plate'];?>" style="color:white" autocomplete="off"/></p></br>
                                <p>*Vehicle Type: <select name="vehicleType" required="required"></p>
                                    <option value="CAR" 
                                        <?php if($row['vehicle_type'] == "CAR"){ ?>
                                        selected
                                        <?php } ?>>CAR</option>
                                    <option value="MOTORCYCLE"
                                        <?php if($row['vehicle_type'] == "MOTORCYCLE"){ ?>
                                        selected
                                        <?php } ?>>MOTORCYCLE</option>
                                    <option value="SUV"
                                        <?php if($row['vehicle_type'] == "SUV"){ ?>
                                        selected
                                        <?php } ?>>SUV</option>
                                    <option value="TRUCK"
                                        <?php if($row['vehicle_type'] == "TRUCK"){ ?>
                                        selected
                                        <?php } ?>>TRUCK</option>
                                </select></br>
                                <p>*School Occupation: <select name="schoolOccupation" required="required" ></p>
                                    <option value="FACULTY"
                                        <?php if($row['school_occupation'] == "FACULTY"){ ?>
                                        selected
                                        <?php } ?>>FACULTY</option>
                                    <option value="STUDENT"
                                        <?php if($row['school_occupation'] == "STUDENT"){ ?>
                                        selected
                                        <?php } ?>>STUDENT</option>
                                    <option value="VISITOR"
                                        <?php if($row['school_occupation'] == "VISITOR"){ ?>
                                        selected
                                        <?php } ?>>VISITOR</option>
                                </select></br>
                                <p>Parking Spot:<br> 
                                <input type="radio" name="floor" value="2nd"<?php if(substr($row['parking_spot'],3,7) == '2nd'){ echo "checked"; } ?> >2nd<br>
                                <input type="radio" name="floor" value="4th" <?php if(substr($row['parking_spot'],3,7) == '4th'){ echo "checked"; } ?>>4th<br><br>
                                <input type="number" name="parkingSpot" min="1" max="42" value="<?php echo substr($row['parking_spot'],0,2);?>" autocomplete="off"/></p></br>
                                <p>Time Out: <input type="time" name="timeOut" value= "<?php echo $row['time_out'];?>" /></p>
                                    
                                <p><input class="button special" type='submit' value='Update Information'/><p>
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
