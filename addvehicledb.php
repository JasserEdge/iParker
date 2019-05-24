<?php
	session_start();
	$_SESSION['vehicle'] = 0;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "softeng-iparker-db";

	$month = date('m');
	$day = date('d');
	$year = date('Y');

	$today = $year . '-' . $month . '-' . $day;
	$time = date("g:i:a");
	//create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if(!$conn){
		die("Connection Failed:" . mysqli_connect_error());
	}
	
	
	//get data
	//get all information from  table
	if ($_SESSION['checkplate'] == 0){
		$license = $_POST['licensePlate'];
		$type = $_POST['vehicleType'];
		$occupation = $_POST['schoolOccupation'];

	} else {
		$license = $_SESSION['checkplate'];	
		$type =  $_SESSION['checktype'];
		$occupation = $_SESSION['checkoccupation'];
	}
	
	//$spot = "none";
	$timeIn = $time;
	//$timeOut = "none";
	$date = $today;
	
	//make sql insert statement
	$sql="INSERT into vehicles(license_plate, vehicle_type, school_occupation, time_in, date) values ('" . $license . "','" . $type . "','" . $occupation . "','" . $timeIn . "','" . $date . "');" ;
	//run the query 
	if(mysqli_query($conn, $sql)){
		$_SESSION['vehicle'] = 1;
		header("Location:parkmanage.php");
		exit;
	} else{
		$_SESSION['vehicle'] = 2;
		header("Location:parkmanage.php");
		exit;
	}

	mysqli_close($conn);
?>