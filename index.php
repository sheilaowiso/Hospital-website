<!DOCTYPE html>
<html>
<head>
	<title> Welcome page </title>
</head>
<body>
	<header>
		<img src="Hospital.png" style="float:left; overflow: hidden;">
		<h1>Savannah Hospital</h1>
		<ul class="headlinks">
			<li><a href="index.php">Home</a></li>
			<li><a href="forms.php">Registration</a></li>
			<li><a href="patients.php">Records</a></li>
			<li><a href="aboutus.php">About us</a></li>
			<li><a href="contacts.php">Contacts</a></li>
		</ul>
		<div class="search">
			<input type="text" name="" placeholder="Search" id="src">
		</div>
	</header><br>
	<div class="main">
		<div class="left">
			<?php require("template-side.php"); ?>
				
		</div>
		<div class="content">
			<h2> Welcome To Savannah Hospital</h2>
<p><br>Savannah Hospital is the one of the Largest  Hospitals in East and Central Africa. We give quality care and service to children since 1947. Based in Muthaiga and spread out to various outpatient clinics including in Mombasa. <br>Our services range is wide and includes giving specialist care to children as we aim to walk with your child to have a good and healthy life.<br>Our services also include laboratory, dental, pharmacy, radiology, well-baby services as we aim to participate actively in achieving Millennium Development Goals and reduction in mortality in East and Central Africa.<br>Our Main Hospital in Muthaiga is open 24 hours, the clinics are open 8:00 AM - 8:00 PM. In case of any inquiries, please check our services directory and contact us.</a></p>

		</div>
	</div>
	<footer>
		<center>
			<h1>
				&copy; &amp; &trade;
			</h1>
			<h1>
				Sheila Akinyi Owiso
			</h1>
			<h1>
				P15/44296/2017
			</h1>
		</center>
	</footer>

	<link rel="stylesheet" type="text/css" media="screen and (min-width:551px) and (max-width:2000px)" href="styles.css">
	<script type="text/javascript" src="js.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</body>
</html>