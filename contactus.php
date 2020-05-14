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
		<link rel="stylesheet" href="assets/css/admin.css" />
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
					<li><strong><p class="text-white">CONTACT US</p></strong></li>				
					<li></li>
					<li></li>
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
						<div class="panel panel-default">
                                <div class="panel-body message">
                                    <div class="">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group">
                                                <button class="btn custom-button"><span class="fa fa-bold"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-italic"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-underline"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-align-left"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-align-right"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-align-center"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-align-justify"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-indent"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-outdent"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-list-ul"></span></button>
                                                <button class="btn custom-button"><span class="fa fa-list-ol"></span></button>
												<button class="btn custom-button"><span class="fa fa-trash-o"></span></button>
                                            <button class="btn custom-button"><span class="fa fa-paperclip"></span></button>
                                                <button class="btn custom-button dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tags"></span>
                                                    <span class="caret"></span></button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="body" rows="10" placeholder="Concerns and Suggestions Here"></textarea>
                                        </div>
                    
                                        <div class="form-group">
                                            <button type="submit" class="btn custom-button">Send</button>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
							<br><p><button onclick="goBack()" class="button special">Go Back</button></div>
						</footer>
				</div>
			</section>
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
			<script>
                function goBack() {
                    window.history.back();
                }
				</script>

	</body>
</html>
