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
	
       $sql = "UPDATE vehicles SET status = '1' WHERE status=0";
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