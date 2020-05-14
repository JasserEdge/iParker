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
	    $spot = $_POST['parkingSpot'].'-'.$_POST['floor'];;
        $timeOut = $_POST['timeOut'];

        if(substr($timeOut,0,2) == '01'){
            $timeOutFinal = '1'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '02'){
            $timeOutFinal = '2'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '03'){
            $timeOutFinal = '3'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '04'){
            $timeOutFinal = '4'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '05'){
            $timeOutFinal = '5'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '06'){
            $timeOutFinal = '6'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '07'){
            $timeOutFinal = '7'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '08'){
            $timeOutFinal = '8'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '09'){
            $timeOutFinal = '9'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '10'){
            $timeOutFinal = '10'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '11'){
            $timeOutFinal = '11'.substr($timeOut,2,6).':am';       
        } else if(substr($timeOut,0,2) == '12'){
            $timeOutFinal = '12'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '13'){
            $timeOutFinal = '1'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '14'){
            $timeOutFinal = '2'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '15'){
            $timeOutFinal = '3'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '16'){
            $timeOutFinal = '4'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '17'){
            $timeOutFinal = '5'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '18'){
            $timeOutFinal = '6'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '19'){
            $timeOutFinal = '7'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '20'){
            $timeOutFinal = '8'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '21'){
            $timeOutFinal = '9'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '22'){
            $timeOutFinal = '10'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '23'){
            $timeOutFinal = '11'.substr($timeOut,2,6).':pm';       
        } else if(substr($timeOut,0,2) == '24'){
            $timeOutFinal = '12'.substr($timeOut,2,6).':am';       
        } 
        $sql="UPDATE vehicles SET license_plate= '$license',
                                vehicle_type= '$type',
                                school_occupation= '$occupation',
                                parking_spot= '$spot',
                                time_out= '$timeOutFinal'
                                WHERE parking_id= $id";
        
        if(mysqli_query($conn, $sql)){ 
            $_SESSION['edit'] = 1;
	        header("Location:parkmanage.php");
	        exit();
        }else{
            $_SESSION['edit'] = 2;
            header("Location:parkmanage.php");
            exit();
        }
    
    mysqli_close($conn);
?>