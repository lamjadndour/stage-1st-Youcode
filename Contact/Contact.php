<?php
include '../db_connection.php';
if (isset($_POST['send'])) {
	$name    = $_POST['name'];
	$email   = $_POST['email'];
	$sujet	 = $_POST['subject'];
	$message = $_POST['msg'];

	$qry = mysqli_query($conn, "INSERT Into mail (name, email, sujet, message) values ('$name','$email','$sujet','$message')");
	if ($qry == true) {
		echo '<script> alert("The message has been sent successfully"); </script>';
		header("location:../index.html");
	} else {
		echo '<script> alert(" problem had been please retry after a while"); </script>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>

</head>

<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="../index.html"><img class="imo" src="../images/logo.png" alt=" "></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="../about.html">QUI SOMMES NOUS?</a></li>
					<li class="fh5co-active"><a href="../Contact/Contact.php">contactez-nous</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p style="color: black;"><small>&copy; 2020 gratimetal.com All Rights Reserved.</span> <span>Designed by
							Lamjad ndour</a> </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>

		</aside>
	</div>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="">
				<span class="contact1-form-title">
					MERCI DE NOUS CONTACTER
				</span>

				<div class="wrap-input1 validate-input" data-validate="Name is required">
					<input class="input1" type="text" name="name" placeholder="Votre nom (obligatoire)
					">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Votre e-mail (obligatoire)
					">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Sujet">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate="Message is required">
					<textarea class="input1" name="msg" placeholder="Votre message
					"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" name="send" value="1">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<script src="js/main.js"></script>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.stellar.min.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.countTo.js"></script>


	<script src="../js/main.js"></script>
</body>

</html>