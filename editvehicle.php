<?php
    session_start();
    $_SESSION['edit'] = 0;
    $_SESSION['editview'] = 0;

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


        $id=$_SESSION['editID'];
        $license = $_POST['licensePlate'];
	    $type = $_POST['vehicleType'];
	    $occupation = $_POST['schoolOccupation'];
	    $spot = $_POST['parkingSpot'];;
	    $timeIn = $_POST['timeIn'];
	    $timeOut = $_POST['timeOut'];
	    $date = $_POST['date'];

        $sql="UPDATE vehicles SET license_plate= '$license',
                                vehicle_type= '$type',
                                school_occupation= '$occupation',
                                parking_spot= '$spot',
                                time_in= '$timeIn',
                                time_out= '$timeIn',
                                date = '$date'
                                WHERE parking_id= $id";
        
        if(mysqli_query($conn, $sql)){ 
            $_SESSION['edit'] = 1;
	        header("Location:parkmanage.php");
	        exit();
        }else{
            $_SESSION['edit'] = 2;
            echo "ERROR: Unable to execute $sql. " . 
	        mysqli_error($conn);
            //header("Location:parkmanage.php");
            //exit();
        }
    
    mysqli_close($conn);
?>