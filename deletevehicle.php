<?php
    session_start();
	$_SESSION['delete'] = 0;

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
        $sql="DELETE FROM vehicles WHERE parking_id= $id";
        
        if(mysqli_query($conn, $sql)){ 
            $_SESSION['delete'] = 1;
	        header("Location:parkmanage.php");
	        exit();
        }else{
            $_SESSION['delete'] = 2;
            header("Location:parkmanage.php");
            exit();
        }
    }
    mysqli_close($conn);



?>