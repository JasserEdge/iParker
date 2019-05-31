<?php
session_start();

?>
<html>
	<head>
		<title>iParker Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--Main CSS-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/alert.css" />
	<style>


	</style>
	</head>
	<body class="landing">
		<?php
			if ($_SESSION['idnumber'] == 1){
				echo "<div class=\"alert align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>Invalid Student ID!</strong> Student ID is not registered in system.
						</div> ";
			}
			if ($_SESSION['idnumber'] == 2){
				echo "<div class=\"alert success align-center fixed-top\">
						<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>
						<strong>Successfully Logged Student into iAcademy System!</strong>
						</div> ";
			}
		?>
		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="options.php"><img class= "logo" src="images/logo.png" alt="no image" /><strong><a href="options.php">iParker iAcademy</a></strong></a></h1>
			<nav id="nav">
				<ul>
					<li><strong><p class="text-white">ADMIN</p></strong></li>					<li><a href="contactus.php">Contact us</a></li>
					<li><a href="options.php">Options</a></li>
					<li><a href="index.php">Log out</a></li>
				</ul>
			</nav>
		</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>


		<!-- Banner -->
			<section id="banner" class="wrapper style1">
				<div class="container box center">
						<header class="align-center">
							<h2>Contact Us:</h2>
						</header>
						<footer class=" containersmall align-center">
							<form name="contactform" class="form" action="" method="post">
								<table>
									<tr>
										<td>
											<label>Send to:</label>
										</td>
										<td>
										<select class="browser-default custom-select custom-select-lg mb-3" name="contact_receiver">
											<option>
												ASD@iacademy.edu.ph
											</option>
											<option>
												QWE@iacademy.edu.ph
											</option>
										</select>
										</td>
									</tr>
									<tr>
										<td>
											<label>Subject</label>
										</td>
										<td>
											<input style="width:100%;" name="subject" maxlength="30"/>
										</td>
									</tr>
									<tr>
										<td>
											<label>Description</label>
										</td>
										<td>
											<textarea name="description" maxlength="1000" cols="25"></textarea>
										</td>
									</tr>
								</table>

								<p><input class="button special" type='submit' value='Submit'/><p>
							</form>
						</footer>
				</div>
			</section>
<<?php
			if(isset($_POST['submit'])){
				$to = $_POST['contact_receiver']
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = "Reporting from the parking space:\n\n" . $_POST['description'];
    mail($to,$subject,$message,$headers);
    echo "Mail Sent to " . $to . " succesfully";
    }
?>
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; iParker. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
