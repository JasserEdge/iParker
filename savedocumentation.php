<?php
	session_start();
	$_SESSION['docu'] = 0;

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
	$license = $_POST['licensePlate'];
	$type = $_POST['vehicleType'];
	$occupation = $_POST['schoolOccupation'];
	//$spot = "none";
	$timeIn = $_POST['timeIn'];
	//$timeOut = "none";
	$date = $_POST['date'];
	
	//make sql insert statement
	$sql="INSERT into vehicles(license_plate, vehicle_type, school_occupation, time_in, date) values ('" . $license . "','" . $type . "','" . $occupation . "','" . $timeIn . "','" . $date . "');" ;
	//run the query 
	if(mysqli_query($conn, $sql)){
		$_SESSION['docu'] = 1;
		header("Location:pastdocumentation.php");
		exit;
	} else{
		$_SESSION['docu'] = 2;
		header("Location:parkmanage.php");
		exit;
	}

	mysqli_close($conn);
?>