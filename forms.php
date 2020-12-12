<!DOCTYPE html>
<html>
<head>
	<title> Forms page </title>
</head>
<body>
	<header>
		<img src="Hospital.png" style="float:left; overflow: hidden;">
		<h1>Savanna Hospital</h1>
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
			<h1>WELCOME TO SAVANNA HOSPITAL</h1>
			<h2>FORMS PAGE </h2>
			<P>Forms data will be entered in this page about the patients</P>
			<br><br>

			<div class="divForm">
				<div class="divFormH">
					Registration of Patient
				</div><br>
				<form action="patient.php" class="uform">
					PatientId <input type="text" required name="" class="pid" placeholder="Patient id"><span class="err"></span><br>
					First Name <input type="text" required name="" class="fname" placeholder="First name " ><span class="err"></span><br>
					Middle Name <input type="text" required placeholder="Middle name" name="" class="mname"><span class="err"></span><br>
					Surname <input type="text" name="" placeholder="Surname" required class="sname"><span class="err"></span><br>
					Date of birth <input type="text" placeholder="Day/Month/Year" required name="" class="dob"><span class="err"></span><br>
					Gender <select class="gen">
						<option>Male</option>
						<option>Female</option>
						<option>Bi-sexual</option>
					</select> <br>
					County <select class="county">
						<?php require("counties.php"); ?>
					</select> <br><br>
					<input type="submit" name="" value="Send" class="send"> &nbsp;&nbsp;
					<input type="reset" name="" value="Clear" class="clear"><br>
					<div class="results"></div>
				</form>
			</div>

			<br><br>

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