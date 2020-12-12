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
			<h1>WELCOME TO SAVANNAH HOSPITAL</h1>
			<h2>HOME PAGE </h2>
			<p><h3><strong>WHO ARE WE</strong></h3>
 

Savannah Hospital is the largest hospital in East and Central Africa. For over 60 years, the hospital has provided high standards of pediatric care for children from birth to 21 years of age. All doctors and nurses have immense experience in pediatric care.

 

<h3><strong>Our Vision</strong></h3>

To be the preferred healthcare provider for East Africa Children, by giving priority to children and their parents needs. The hospital is devoted to the care of children as the fundamental concern while providing a favorable environment for both patients and members of staff.
<h3><strong>Our Mission</strong></h3>

The hospital is a non-profit organization, chartered with responsibilities benefiting humankind such as:

To provide the best available medical service, care, professional and technical skills.
To recognize our responsibility to patients and parents, both paying and non-paying.
To maintain a constructive relationship with other hospitals, business partners, and suppliers.
To constantly re-invest in facilities, equipment, and new technology, as well as in upgrading the skills of our staff.
<h3><strong>Our Values</strong></h3>

To regard our patients needs as our chief priority.
To treat all patients colleagues and admitting consultants as we would wish to be treated.
To provide a safe and child- friendly working environment for staff and patients alike.</p>
			
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