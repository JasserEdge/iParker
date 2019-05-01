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
	//get data from form
	$idnumber = $_POST['idnumber'];
	//make sql insert statement
	$sql="SELECT * FROM students WHERE studentId='$idnumber'";
	//check if SQL is correctly formed
									
	$query = mysqli_query($conn, $sql); 

	if(mysqli_num_rows($query) > 0){
		$_SESSION['idnumber'] = 2;
		header("Location:addstudent.php");
		exit;
	} else{
		$_SESSION['idnumber'] = 1;
		mysqli_error($conn);
		header("Location:addstudent.php");
		exit;
	}
	mysqli_close($conn);
?>
									
		