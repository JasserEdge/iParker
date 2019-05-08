<?php
	session_start();
	$_SESSION['login'] = 0;
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
	$email = $_POST['email'];
	$password = $_POST['password'];
	//make sql
	$sql="SELECT * FROM accounts WHERE email='$email' AND password='$password'";
	//check if SQL is correctly formed
									
	$query = mysqli_query($conn, $sql); 

	if(mysqli_num_rows($query) > 0){
		$_SESSION['login'] = 2;
		header("Location:options.php");
		exit;
	} else{
		$_SESSION['login'] = 1;
		mysqli_error($conn);
		header("Location:index.php");
		exit;
	}
	mysqli_close($conn);
?>
									
		