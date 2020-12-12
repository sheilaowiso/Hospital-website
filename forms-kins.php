<!DOCTYPE html>
<html>
<head>
	<title> Forms Kins page </title>
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
			<P>Forms data will be entered in this page about the next of kins for the patients</P>
			<br><br>

			<div class="divForm">
				<div class="divFormH">
					Next of kin 
				</div><br>
				<form action="kin.php" class="uform"> 
					PatientId <br>
					<?php 
						//fetch id of registered patients in the drop down 
						$db = mysqli_connect("localhost","root","","hospital");
						if($db)
						{
							$sel = mysqli_query($db,"SELECT * FROM patients ORDER BY parentid DESC ");
							if( mysqli_num_rows($sel) == 0 )
							{
								echo "<h1>There are currently no patients in the database. Fill in the patients table from the database.</h1>";
							}
							else
							{
								// fetch parent ids then user interface 
								echo "<select class='kinpid'>";
								while( $a = mysqli_fetch_array($sel) )
								{
									$idz = $a['pid'];

									echo "<option>$idz<option>";
								}
								echo "</select><br />";
								?>

								First Name <br><input type="text" required name="" class="kinfname"><span class="err"></span><br>
					Surname <br><input type="text" name="" required class="kinsname"><span class="err"></span><br>
					Relationship <br><input type="text" required name="" class="rel"><span class="err"></span><br>
					<br>
					<input type="submit" name="create" value="Send" class="kinsend"> &nbsp;&nbsp;
					<input type="reset" name="" value="Clear" class="clear"><br>
					<div class="results"></div>

					
								<?php 
							}
						 	
						}
						else
						{
							echo "<h1>Problem with connecting to the database</h1>";
							
						}

					?>


					

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