<?php

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
    $query = array(
        "SELECT * from vehicles WHERE parking_spot='1-2nd'", 
        "SELECT * from vehicles WHERE parking_spot='2-2nd'",
        "SELECT * from vehicles WHERE parking_spot='3-2nd'",
        "SELECT * from vehicles WHERE parking_spot='4-2nd'",
        "SELECT * from vehicles WHERE parking_spot='5-2nd'",
        "SELECT * from vehicles WHERE parking_spot='6-2nd'",
        "SELECT * from vehicles WHERE parking_spot='7-2nd'",
        "SELECT * from vehicles WHERE parking_spot='8-2nd'",
        "SELECT * from vehicles WHERE parking_spot='9-2nd'",
        "SELECT * from vehicles WHERE parking_spot='10-2nd'",
        "SELECT * from vehicles WHERE parking_spot='11-2nd'",
        "SELECT * from vehicles WHERE parking_spot='12-2nd'",
        "SELECT * from vehicles WHERE parking_spot='13-2nd'",
        "SELECT * from vehicles WHERE parking_spot='14-2nd'",
        "SELECT * from vehicles WHERE parking_spot='15-2nd'",
        "SELECT * from vehicles WHERE parking_spot='16-2nd'",
        "SELECT * from vehicles WHERE parking_spot='17-2nd'",
        "SELECT * from vehicles WHERE parking_spot='18-2nd'",
        "SELECT * from vehicles WHERE parking_spot='19-2nd'",
        "SELECT * from vehicles WHERE parking_spot='20-2nd'",
        "SELECT * from vehicles WHERE parking_spot='21-2nd'",
        "SELECT * from vehicles WHERE parking_spot='22-2nd'",
        "SELECT * from vehicles WHERE parking_spot='23-2nd'",
        "SELECT * from vehicles WHERE parking_spot='24-2nd'",
        "SELECT * from vehicles WHERE parking_spot='25-2nd'",
        "SELECT * from vehicles WHERE parking_spot='26-2nd'",
        "SELECT * from vehicles WHERE parking_spot='27-2nd'",
        "SELECT * from vehicles WHERE parking_spot='28-2nd'",
        "SELECT * from vehicles WHERE parking_spot='29-2nd'",
        "SELECT * from vehicles WHERE parking_spot='30-2nd'",
        "SELECT * from vehicles WHERE parking_spot='31-2nd'",
        "SELECT * from vehicles WHERE parking_spot='32-2nd'",
        "SELECT * from vehicles WHERE parking_spot='33-2nd'",
        "SELECT * from vehicles WHERE parking_spot='34-2nd'");
    $query0 = array(
        "SELECT * from vehicles WHERE parking_spot='1-4th'", 
        "SELECT * from vehicles WHERE parking_spot='2-4th'",
        "SELECT * from vehicles WHERE parking_spot='3-4th'",
        "SELECT * from vehicles WHERE parking_spot='4-4th'",
        "SELECT * from vehicles WHERE parking_spot='5-4th'",
        "SELECT * from vehicles WHERE parking_spot='6-4th'",
        "SELECT * from vehicles WHERE parking_spot='7-4th'",
        "SELECT * from vehicles WHERE parking_spot='8-4th'",
        "SELECT * from vehicles WHERE parking_spot='9-4th'",
        "SELECT * from vehicles WHERE parking_spot='10-4th'",
        "SELECT * from vehicles WHERE parking_spot='11-4th'",
        "SELECT * from vehicles WHERE parking_spot='12-4th'",
        "SELECT * from vehicles WHERE parking_spot='13-4th'",
        "SELECT * from vehicles WHERE parking_spot='14-4th'",
        "SELECT * from vehicles WHERE parking_spot='15-4th'",
        "SELECT * from vehicles WHERE parking_spot='16-4th'",
        "SELECT * from vehicles WHERE parking_spot='17-4th'",
        "SELECT * from vehicles WHERE parking_spot='18-4th'",
        "SELECT * from vehicles WHERE parking_spot='19-4th'",
        "SELECT * from vehicles WHERE parking_spot='20-4th'",
        "SELECT * from vehicles WHERE parking_spot='21-4th'",
        "SELECT * from vehicles WHERE parking_spot='22-4th'",
        "SELECT * from vehicles WHERE parking_spot='23-4th'",
        "SELECT * from vehicles WHERE parking_spot='24-4th'",
        "SELECT * from vehicles WHERE parking_spot='25-4th'",
        "SELECT * from vehicles WHERE parking_spot='26-4th'",
        "SELECT * from vehicles WHERE parking_spot='27-4th'",
        "SELECT * from vehicles WHERE parking_spot='28-4th'",
        "SELECT * from vehicles WHERE parking_spot='29-4th'",
        "SELECT * from vehicles WHERE parking_spot='30-4th'",
        "SELECT * from vehicles WHERE parking_spot='31-4th'",
        "SELECT * from vehicles WHERE parking_spot='32-4th'",
        "SELECT * from vehicles WHERE parking_spot='33-4th'",
        "SELECT * from vehicles WHERE parking_spot='34-4th'",
        "SELECT * from vehicles WHERE parking_spot='35-4th'",
        "SELECT * from vehicles WHERE parking_spot='36-4th'",
        "SELECT * from vehicles WHERE parking_spot='37-4th'",
        "SELECT * from vehicles WHERE parking_spot='38-4th'",
        "SELECT * from vehicles WHERE parking_spot='39-4th'",
        "SELECT * from vehicles WHERE parking_spot='40-4th'",
        "SELECT * from vehicles WHERE parking_spot='41-4th'",
        "SELECT * from vehicles WHERE parking_spot='42-4th'");
?> 
<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
        
	</head>
	<body class="landing">
		<!-- Header -->
		<header id="header" class="alt">
			<h1><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="">iParker iAcademy</a></strong></h1>
			
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		
		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container">
					<header class="major special">
						<h2>Available Parking Spots<h2>

                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <div style="background: url('images/2ndflr.jpg'); border: 1px solid #ddd; border-radius: 4px; width:550px; height:486px; position: relative;">
                                <div class="text"><p>2nd Floor Parking</p></div>
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[0])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:65px; left:178px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[1])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:95px; left:154px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[2])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:90px; left:5px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[3])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:130px; left:-20px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[4])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:158px; left:-45px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[5])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:185px; left:-70px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[6])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:225px; left:-95px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[7])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:253px; left:-119px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[8])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:282px; left:-143px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[9])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:310px; left:-168px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[10])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-138px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[11])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-133px; width:15px; height:15px;">
                                    
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[12])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-121px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[13])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-117px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[14])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-111px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[15])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-108px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[16])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-96px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[17])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-93px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[18])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-88px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[19])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-84px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[20])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-73px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[21])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-70px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[22])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:420px; left:-66px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[23])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:325px; left:356px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[24])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:301px; left:333px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[25])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:265px; left:310px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[26])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:235px; left:285px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[27])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:208px; left:261px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[28])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:180px; left:238px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[29])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:143px; left:215px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[30])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:115px; left:190px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[31])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:85px; left:165px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[32])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:-30px; left:94px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query[33])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:-30px; left:23px; width:15px; height:15px;">
                                </div>
                                
                            </div> 

                            <div class="mySlides fade">
                                <div style="background: url('images/4thflr.jpg'); border: 1px solid #ddd; border-radius: 4px; width:550px; height:486px; position: relative;">
                                    <div class="text"><p>4th Floor Parking</p></div>
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[0])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:23px; left:128px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[1])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:23px; left:71px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[2])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:103px; left:5px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[3])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:143px; left:-17px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[4])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:173px; left:-39px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[5])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:203px; left:-63px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[6])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:240px; left:-87px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[7])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:269px; left:-110px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[8])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:299px; left:-133px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[9])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:327px; left:-155px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[10])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:354px; left:-178px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[11])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:417px; left:-150px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[12])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:417px; left:-145px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[13])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:416px; left:-134px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[14])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:414px; left:-130px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[15])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:413px; left:-127px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[16])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:413px; left:-124px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[17])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:413px; left:-115px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[18])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:413px; left:-113px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[19])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:413px; left:-109px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[20])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:412px; left:-106px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[21])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:412px; left:-97px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[22])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:412px; left:-95px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[23])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:363px; left:405px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[24])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:323px; left:420px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[25])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:299px; left:396px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[26])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:265px; left:373px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[27])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:240px; left:350px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[28])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:212px; left:327px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[29])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:186px; left:303px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[30])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:150px; left:280px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[31])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:122px; left:258px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[32])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:93px; left:235px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[33])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:54px; left:211px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[34])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:63px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[35])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:12px; width:15px; height:15px;">

                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[36])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-40px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[37])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-90px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[38])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-150px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[39])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-200px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[40])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-253px; width:15px; height:15px;">
                                    <img <?php
                                        if(mysqli_num_rows(@mysqli_query($conn, $query0[41])) > 0){
                                            echo "src='images/red.png'";
                                        } else {
                                            echo "src='images/green.png'";
                                        }
                                     ?> style="position: relative; top:88px; left:-306px; width:15px; height:15px;">
                                </div>
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>

                        <br><p><button onclick="goBack()" class="button special">Go Back</button></div>
					</header>

                    <footer>
                        
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
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function goBack() {
                    window.history.back();
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slides[slideIndex-1].style.display = "block";  
                }
            </script>

	</body>
</html>