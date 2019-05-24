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
	//data
    $plate = $_POST['licensePlate'];
    $_SESSION['checkplate'] = $plate;
    $_SESSION['checktype'] = 0;
    $_SESSION['checkoccupation'] = 0;

    
	//make sql insert statement
	$sql="SELECT * FROM vehicles WHERE license_plate ='$plate'";
	//check if SQL is correctly formed
									
    $query = mysqli_query($conn, $sql); 
    
    if($query){
        while($row = @mysqli_fetch_array($query)) {
            $_SESSION['checktype'] = $row['vehicle_type'];
            $_SESSION['checkoccupation'] = $row['school_occupation'];
        }
    }


	if(mysqli_num_rows($query) > 0) {
		header("Location:addvehicledb.php");
		exit;
	} else{
        $_SESSION['checkplate'] = 0;
		header("Location:addvehicle.php");
		exit;
	}
	mysqli_close($conn);
?>
									
		